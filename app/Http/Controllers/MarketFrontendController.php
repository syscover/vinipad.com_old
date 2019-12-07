<?php namespace App\Http\Controllers;

use App\Http\Services\MarketService;
use App\Http\Services\WebFrontendService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Sermepa\Tpv\Tpv;
use Syscover\Crm\Libraries\CrmLibrary;
use Syscover\Crm\Models\Customer;
use Syscover\Market\Libraries\PayPalLibrary;
use Syscover\Market\Models\CartPriceRule;
use Syscover\Market\Models\CustomerDiscountHistory;
use Syscover\Market\Models\Order;
use Syscover\Market\Models\OrderRow;
use Syscover\Pulsar\Models\Country;
use Syscover\ShoppingCart\Facades\CartProvider;

/**
 * Class MarketFrontendController
 * @package App\Http\Controllers
 * 
 * ATENCIÓN! Para constantes usar el fichero de configuracón config/www.php
 * 
 */

class MarketFrontendController extends Controller
{
    /**
     * Function to show order to customer
     *
     * @param   Request     $request
     * @return  \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getOrder(Request $request)
    {
        // get parameters from url route
        $parameters = $request->route()->parameters();

        // get customer from session
        $response['customer'] = auth('crm')->user();

        // get Order
        $response['order'] = Order::builder()
            ->where('id_116', $parameters['order'])
            ->where('customer_id_116', $response['customer']->id_301)
            ->first();

        // get order rows
        $response['rows'] = $response['order']->getOrderRows;

        // transform data column to object
        $response['rows']->map(function ($item, $key) {
            return $item->data_117 = json_decode($item->data_117);
        });

        // if need name of country, obtain all countries
        $response['countries'] = Country::builder()
            ->where('lang_id_002', $response['order']->lang_id_301)
            ->get();

        return view('www.market.order', $response);
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\JsonResponse
     */
    public function postCheckout03(Request $request)
    {
        if(CartProvider::instance()->getQuantity() < 1)
        {
            return redirect()->route('error-' . user_lang(), ['code' => '0002']);
        }

        // set country to calculate tax
        config(['market.taxCountry' => $request->input('country')]);

        $customer = Customer::builder()
            ->where('email_301', $request->input('email'))
            ->first();

        // check if exist customer
        if($customer == null)
        {
            $customer = CrmLibrary::createCustomer($request);
        }

        // create data order
        $orderDate = date('U');
        $orderAux = [
            'date_116'                                  => $orderDate,
            'date_text_116'				                => date(config('pulsar.datePattern') . ' H:i', $orderDate),
            'status_id_116'                             => 1, // Pending
            'ip_116'                                    => $request->ip(),  // customer IP
            'payment_method_id_116'                     => $request->input('paymentMethod'),
            'comments_116'                              => null,

            // set amounts to order
            'subtotal_116'                              => CartProvider::instance()->subtotal,                                                              // amount without tax and without shipping
            'discount_amount_116'                       => CartProvider::instance()->discountAmount,                                                        // total amount to discount, fixed plus percentage discounts
            'subtotal_with_discounts_116'               => CartProvider::instance()->subtotalWithDiscounts,                                                 // subtotal with discounts applied
            'tax_amount_116'                            => CartProvider::instance()->taxAmount,                                                             // total tax amount
            'cart_items_total_without_discounts_116'    => CartProvider::instance()->cartItemsTotalWithoutDiscounts,                                        // total of cart items. Amount with tax, without discount and without shipping
            'shipping_amount_116'                       => CartProvider::instance()->hasFreeShipping()? 0 :  CartProvider::instance()->shippingAmount,      // shipping amount
            'total_116'                                 => CartProvider::instance()->total,                                                                 // subtotal and shipping amount with tax

            // set gift data to all order
            'has_gift_116'                              => false,
            'gift_from_116'                             => null,
            'gift_to_116'                               => null,
            'gift_message_116'                          => null,

            // customer data
            'customer_id_116'                           => $customer->id_301,
            'customer_group_id_116'                     => $customer->group_id_301,
            'customer_company_116'                      => $customer->company_301,
            'customer_tin_116'                          => $customer->tin_301,
            'customer_name_116'                         => $customer->name_301,
            'customer_surname_116'                      => $customer->surname_301,
            'customer_email_116'                        => $customer->email_301,
            'customer_phone_116'                        => $customer->phone_301,
            'customer_mobile_116'                       => $customer->mobile_301,

            // invoice data
            'invoice_country_id_116'                    => $customer->country_id_301,
            'invoice_territorial_area_1_id_116'         => $customer->territorial_area_1_id_301,
            'invoice_territorial_area_2_id_116'         => $customer->territorial_area_2_id_301,
            'invoice_territorial_area_3_id_116'         => $customer->territorial_area_3_id_301,
            'invoice_cp_116'                            => $customer->cp_301,
            'invoice_locality_116'                      => $customer->locality_301,
            'invoice_address_116'                       => $customer->address_301,
            'invoice_latitude_116'                      => $customer->latitude_301,
            'invoice_longitude_116'                     => $customer->longitude_301,
            'has_invoice_116'                           => $request->has('hasInvoice'),
            'invoiced_116'                              => false,   // check if has been created invoice on billing program

            // check if there are to do a delivery
            'has_shipping_116'                          => CartProvider::instance()->hasItemTransportable()
        ];

        // if cart has shipping, set shipping in order
        if(CartProvider::instance()->hasItemTransportable())
        {
            $shippingData   = CartProvider::instance()->getShippingData();

            $orderAux       = array_merge($orderAux, [
                'shipping_company_116'                  => isset($shippingData['company'])? $shippingData['company'] : null,
                'shipping_name_116'                     => isset($shippingData['name'])? ucfirst($shippingData['name']) : null,
                'shipping_surname_116'                  => isset($shippingData['surname'])? ucfirst($shippingData['surname']) : null,
                'shipping_email_116'                    => isset($shippingData['email'])? strtolower($shippingData['email']) : null,
                'shipping_phone_116'                    => isset($shippingData['phone'])? $shippingData['phone'] : null,
                'shipping_mobile_116'                   => isset($shippingData['mobile'])? $shippingData['mobile'] : null,
                'shipping_country_id_116'               => isset($shippingData['country'])? $shippingData['country'] : null,
                'shipping_territorial_area_1_id_116'    => isset($shippingData['territorialArea1'])? $shippingData['territorialArea1'] : null,
                'shipping_territorial_area_2_id_116'    => isset($shippingData['territorialArea2'])? $shippingData['territorialArea2'] : null,
                'shipping_territorial_area_3_id_116'    => isset($shippingData['territorialArea3'])? $shippingData['territorialArea3'] : null,
                'shipping_cp_116'                       => isset($shippingData['cp'])? $shippingData['cp'] : null,
                'shipping_locality_116'                 => isset($shippingData['locality'])? ucfirst($shippingData['locality']) : null,
                'shipping_address_116'                  => isset($shippingData['address'])? $shippingData['address'] : null,
                'shipping_comments_116'                 => isset($shippingData['comments'])? $shippingData['comments'] : null,
                'shipping_latitude_116'                 => isset($shippingData['latitude'])? $shippingData['latitude'] : null,
                'shipping_longitude_116'                => isset($shippingData['longitude'])? $shippingData['longitude'] : null,
            ]);
        }

        // Create order in database
        $order = Order::create($orderAux);

        // Create items from shopping cart
        $items = [];
        foreach (CartProvider::instance()->getCartItems() as $item)
        {
            $itemAux = [
                'lang_id_117'                               => user_lang(),
                'order_id_117'                              => $order->id_116,
                'product_id_117'                            => $item->id,
                'name_117'                                  => $item->name,
                'description_117'                           => $item->options->product->description_112,
                'data_117'                                  => json_encode(['product' => $item->options->product]),

                // amounts
                'price_117'                                 => $item->price,                    // unit price without tax


                'quantity_117'                              => $item->quantity,                 // number of units
                'subtotal_117'                              => $item->subtotal,                 // subtotal without tax
                'total_without_discounts_117'               => $item->totalWithoutDiscounts,    // total from row without discounts

                // discounts
                'discount_subtotal_percentage_117'          => $item->discountSubtotalPercentage,
                'discount_total_percentage_117'             => $item->discountTotalPercentage,
                'discount_subtotal_percentage_amount_117'   => $item->discountSubtotalPercentageAmount,
                'discount_total_percentage_amount_117'      => $item->discountTotalPercentageAmount,
                'discount_subtotal_fixed_amount_117'        => $item->discountSubtotalFixedAmount,
                'discount_total_fixed_amount_117'           => $item->discountTotalFixedAmount,
                'discount_amount_117'                       => $item->discountAmount,

                // subtotal with discounts
                'subtotal_with_discounts_117'               => $item->subtotalWithDiscounts,      // subtotal without tax and with discounts

                // taxes
                'tax_rules_117'                             => json_encode($item->taxRules->values()),
                'tax_amount_117'                            => $item->taxAmount,

                // total
                'total_117'                                 => $item->total,        // total with tax and discounts

                // gift fields
                // to set gift, create array in options Shopping Cart, with gift key, and keys: from, to, message
                'has_gift_117'                              => $item->options->gift != null? true : false,
                'gift_from_117'                             => isset($item->options->gift['from'])? $item->options->gift['from'] : null,
                'gift_to_117'                               => isset($item->options->gift['to'])? $item->options->gift['to'] : null,
                'gift_message_117'                          => isset($item->options->gift['message'])? $item->options->gift['message'] : null
            ];

            // add item to array
            $items[] = $itemAux;
        }

        // set items like rows
        OrderRow::insert($items);


        // store cart prices rules
        if(CartProvider::instance()->getPriceRules()->count() > 0)
        {
            $cartPriceRules             = CartProvider::instance()->getPriceRules();
            $customerDiscountHistory    = [];

            foreach($cartPriceRules as $cartPriceRule)
            {
                // rule obtain from database, this object is instance in Syscover\Market\Libraries\CouponLibrary::addCouponCode
                $priceRule = $cartPriceRule->options->priceRule;

                $customerDiscountHistory[] = [
                    'date_126'                          => $orderDate,
                    'customer_id_126'                   => $customer->id_301,
                    'order_id_126'                      => $order->id_116,
                    'active_126'                        => true,                // activate this discount

                    // see config/market.php section Discounts rules families
                    // 1 - discount from, cart price rule
                    // 2 - discount from, catalog price rule
                    // 3 - discount from, customer rule discount
                    'rule_family_id_126'                => 1,

                    'has_coupon_126'                    => $priceRule->has_coupon_120,
                    'coupon_code_126'                   => $priceRule->coupon_code_120,
                    'rule_id_126'                       => $priceRule->id_120,

                    'name_text_id_126'                  => $priceRule->name_text_id_120,
                    'description_text_id_126'           => $priceRule->description_text_id_120,
                    'name_text_value_126'               => $priceRule->name_text_value,
                    'description_text_value_126'        => $priceRule->description_text_value,

                    // see config/market.php section Discount type on shopping cart
                    // 1 - without discount
                    // 2 - discount percentage subtotal
                    // 3 - discount fixed amount subtotal
                    // 4 - discount percentage total
                    // 5 - discount fixed amount total
                    'discount_type_id_126'              => $priceRule->discount_type_id_120,

                    // fixed amount to discount over shopping cart
                    'discount_fixed_amount_126'         => $priceRule->discount_fixed_amount_120,

                    // percentage to discount over shopping cart
                    'discount_percentage_126'           => $priceRule->discount_percentage_120,

                    // limit amount to discount, if the discount is a percentage
                    'maximum_discount_amount_126'       => $priceRule->maximum_discount_amount_120,

                    // discount amount of this rule
                    'discount_amount_126'               => $cartPriceRule->discountAmount,

                    // check if apply discount to shipping amount
                    'apply_shipping_amount_126'         => $priceRule->apply_shipping_amount_120,

                    // check if this discount has free shipping
                    'free_shipping_126'                 => $priceRule->free_shipping_120,

                    // rule encode in json format
                    'rules_126'                         => json_encode($cartPriceRule),
                ];

                // increment total used in cart price rule
                CartPriceRule::where('id_120', $priceRule->id_120)->increment('total_used_120');
            }

            // save price rule in customer discount history
            CustomerDiscountHistory::insert($customerDiscountHistory);
        }

        // destroy shopping cart
        CartProvider::instance()->destroy();

        // set orderId in session to track order
        session(['trackPaidOrderId' => $order->id_116]);

        // Redsys Payment (debit and credit cart )
        if($request->input('paymentMethod') === '1')
        {
            try
            {
                $redsys = new Tpv();
                $redsys->setAmount($order->total_116);
                $redsys->setOrder(config('market.orderIdPrefix') . $order->id_116);
                $redsys->setMerchantcode(config('market.redsysMode') == 'live' ? config('market.redsysLiveMerchantCode') : config('market.redsysTestMerchantCode'));
                $redsys->setCurrency('978');
                $redsys->setTransactiontype('0');
                $redsys->setTerminal('001');

                // important, this url is calling from RedSys server to confirm payment
                $redsys->setNotification(route('redsysPaymentResponse'));

                $redsys->setUrlOk(route('redsysPaymentResponseSuccessful'));
                $redsys->setUrlKo(route('redsysPaymentResponseFailure'));
                $redsys->setVersion('HMAC_SHA256_V1');
                $redsys->setTradeName(config('market.redsysMode') == 'live'? config('market.redsysLiveMerchantName') : config('market.redsysTestMerchantName'));
                $redsys->setTitular($order->customer_name_116 . ' ' . $order->customer_surname_116);
                $redsys->setProductDescription(trans('web.redsysProductDescription'));
                $redsys->setEnviroment(config('market.redsysMode'));

                // signature SHA256
                $signature = $redsys->generateMerchantSignature(config('market.redsysMode') == 'live'? config('market.redsysLiveKey') : config('market.redsysTestKey'));
                $redsys->setMerchantSignature($signature);

                Order::setOrderLog($order->id_116, trans('market::pulsar.message_customer_go_to_tpv'));

                if($request->input('responseType') == 'json')
                {
                    return response()->json([
                        'status'    => 'success',
                        'redsys'    => $redsys->createForm()
                    ]);
                }
                else
                {
                    return view('pulsar::common.views.html_display', [
                        'html' => $redsys->executeRedirection()
                    ]);
                }
            }
            catch(\Exception $e)
            {
                // log register on order
                Order::setOrderLog($order->id_116, trans('market::pulsar.message_customer_go_to_tpv_error', ['error' => $e->getMessage()]));

                echo $e->getMessage();
            }
        }

        // PayPal Payment
        elseif($request->input('paymentMethod') === '2')
        {
            // log register on order
            Order::setOrderLog($order->id_116, trans('market::pulsar.message_customer_go_to_paypal'));

            if($request->input('responseType') == 'json')
            {
                return response()->json([
                    'status'    => 'success',
                    'order'     => $order,
                    'payPal'    => PayPalLibrary::createForm($order->id_116)
                ]);
            }
            else
            {
                return view('pulsar::common.views.html_display', ['html' => PayPalLibrary::executeRedirection($order->id_116)]);
            }
        }
    }

    /**
     * Function is call from redsys server
     *
     * @param   Request $request
     * @return  \Illuminate\Http\JsonResponse
     * @throws  \Exception
     */
    public function redsysPaymentResponse(Request $request)
    {
        try
        {
            // package obtain from , https://github.com/ssheduardo/sermepa
            $redsys     = new Tpv();
            $parameters = $redsys->getMerchantParameters($request->input('Ds_MerchantParameters'));
            $DsResponse = $parameters['Ds_Response'];
            $DsResponse += 0;

            if($redsys->check(config('market.redsysMode') == 'live'? config('market.redsysLiveKey') : config('market.redsysTestKey'), $request->all()) && $DsResponse <= 99)
            {
                $orderId = str_replace(config('market.orderIdPrefix'), '', $parameters['Ds_Order']);

                // get order
                $order = Order::builder()
                    ->where('id_116', $orderId)
                    ->first();

                // change order status to next status, depending on your method of payment
                Order::where('id_116', $orderId)->update([
                    // get next status
                    'status_id_116' => $order->order_status_successful_id_115
                ]);

                // Send order email
                MarketService::sendOrderEmail($orderId);

                // log register on order
                Order::setOrderLog($orderId, trans('market::pulsar.message_tpv_payment_successful'));

                return response()->json([
                    'status'    => 'success'
                ]);
            }
            else
            {
                return response()->json([
                    'status'    => 'error',
                    'error'     => $DsResponse
                ]);
            }
        }
        catch(\Exception $e)
        {
            echo $e->getMessage();
        }
    }

    /**
     * Function calling when payment process is completed and customer click over button, return shop
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function redsysPaymentResponseSuccessful(Request $request)
    {
        // log
        Log::info('Enter in redsysPaymentResponse method whit parameters', $request->all());

        try {
            $redsys     = new Tpv();
            $parameters = $redsys->getMerchantParameters($request->input("Ds_MerchantParameters"));
            $DsResponse = $parameters["Ds_Response"];
            $DsResponse += 0;

            if ($redsys->check(config('market.redsysMode') == 'live' ? config('market.redsysLiveKey') : config('market.redsysTestKey'), $request->all()) && $DsResponse <= 99)
            {
                // get order ID
                $orderId = str_replace(config('market.orderIdPrefix'), '', $parameters['Ds_Order']);

                return redirect()->route('purchaseCompleted-' . user_lang(), ['order' => encrypt($orderId)]);
            }
            else
            {
                return redirect()->route('error-' . user_lang(), ['code' => '0001']);
            }
        }
        catch (\Exception $e)
        {
            echo $e->getMessage();
        }
    }

    /**
     * Function calling when return to shop with process payment failure
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redsysPaymentResponseFailure(Request $request)
    {
        try
        {
            $redsys     = new Tpv();
            $parameters = $redsys->getMerchantParameters($request->input("Ds_MerchantParameters"));

            $nOrder     = str_replace(config('market.orderIdPrefix'), '', $parameters['Ds_Order']);

            // set log error in order
            Order::setOrderLog($nOrder, trans('market::pulsar.message_tpv_payment_error', ['error' => $parameters['Ds_Response']]));

            return redirect()->route('error-' . user_lang(), ['code' => '0001']);
        }
        catch(\Exception $e)
        {
            echo $e->getMessage();
        }
    }

    /**
     * Function calling from PayPal when payment is successful
     *
     * @param   Request $request
     * @return  \Illuminate\Http\RedirectResponse
     */
    public function payPalPaymentResponseSuccessful(Request $request)
    {
        Order::setOrderLog($request->input('order'), trans('market::pulsar.message_paypal_payment_successful'));

        // Send order email
        MarketService::sendOrderEmail($request->input('order'));

        return redirect()
            ->route('purchaseCompleted-' . user_lang(), ['order' => encrypt($request->input('order'))]);
    }

    /**
     * Function calling from PayPal when payment is failure
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function payPalPaymentResponseFailure(Request $request)
    {
        Order::setOrderLog($request->input('order'), trans('market::pulsar.message_paypal_payment_failure'));

        return redirect()
            ->route('getOrder-' . user_lang(), ['id' => $request->input('order')]);
    }

    public function purchaseCompleted(Request $request)
    {
        // get parameters from url route
        $parameters = $request->route()->parameters();

        // get countries
        $response = WebFrontendService::setCommonResponseValues();

        // get Order
        $response['order'] = Order::builder()
            ->where('id_116', decrypt($parameters['order']))
            ->first();

        // get order rows
        $response['rows'] = $response['order']->getOrderRows;


        $response['insertProducts'] = false;
        foreach ($response['rows'] as $row)
        {
            if($row->product_id_117 == config('web-vinipad.products.installInsertVinipad'))
                $response['insertProducts'] = true;
        }

        // transform data column to object
        $response['rows']->map(function ($item, $key) {
            $item->data_117         = json_decode($item->data_117);
            $item->tax_rules_117    = json_decode($item->tax_rules_117);

            return $item;
        });

        // check orderId in session to track order for google analytics
        if(session('trackPaidOrderId') !== null && session('trackPaidOrderId') == $response['order']->id_116)
        {
            $response['trackPaidOrderId'] = true;
            $request->session()->forget('trackPaidOrderId');
        }
        else
        {
            $response['trackPaidOrderId'] = false;
        }

        return view('www.market.purchase_completed', $response);
    }
}