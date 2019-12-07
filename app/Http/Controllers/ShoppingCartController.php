<?php namespace App\Http\Controllers;

use App\Http\Services\WebFrontendService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Syscover\Market\Libraries\CouponLibrary;
use Syscover\Market\Models\Product;
use Syscover\Market\Models\TaxRule;
use Syscover\ShoppingCart\TaxRule as TaxRuleShoppingCart;
use Syscover\ShoppingCart\Facades\CartProvider;
use Syscover\ShoppingCart\Item;

/**
 * Class ShoppingCartController
 * @package App\Http\Controllers
 */

class ShoppingCartController extends Controller
{
    /**
     * Función que añade un producto al carro de compra
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postShoppingCart(Request $request)
    {
        // set country to calculate tax
        config(['market.taxCountry' => $request->input('country')]);

        // save data order in session
        session(['order' => $request->all()]);

        $product = Product::builder()
            ->where('id_111', (int)$request->input('product'))
            ->where('lang_id_112', user_lang())
            ->where('active_111', true)
            ->first();

        // get tax rule with default parameters
        $taxRules = TaxRule::builder()
            ->where('country_id_103', config('market.taxCountry'))
            ->where('customer_class_tax_id_106', config('market.taxCustomerClass'))
            ->where('product_class_tax_id_107', $product->product_class_tax_id_111)
            ->orderBy('priority_104', 'asc')
            ->get();

        // create taxRule with format for shopping cart
        $taxRulesShoppingCart = [];
        foreach ($taxRules as $taxRule)
        {
            $taxRulesShoppingCart[] = new TaxRuleShoppingCart(
                Lang::has($taxRule->translation_104) ? trans($taxRule->translation_104) : $taxRule->name_104,
                $taxRule->tax_rate_103,
                $taxRule->priority_104,
                $taxRule->sort_order_104
            );
        }

        //**************************************************************************************
        // Know if product is transportable
        // Options:
        // 1 - downloadable
        // 2 - transportable
        // 3 - transportable_downloadable
        // 4 - service
        //
        // You can change this value, if you have same product transportable and downloadable
        //
        //***************************************
        $isTransportable = $product->type_id_111 == 2 || $product->type_id_111 == 3? true : false;


        // when get price from product, internally calculate subtotal and total.
        // we don't want save this object on shopping cart, if login user with different prices and add same product, will be different because the product will have different prices
        $optionsProduct = $product;

        try
        {
            // destroy cart to avoid sum products
            CartProvider::instance()->destroy();

            // instance row to add product
            CartProvider::instance()->add(
                new Item(
                    $product->id_111,
                    $product->name_112,
                    1,
                    $product->price_111,
                    $product->weight_111,
                    $isTransportable,
                    $taxRulesShoppingCart,
                    [
                        'product' => $optionsProduct
                    ]
                )
            );
        }
        catch (\Exception $e)
        {
            $e->getMessage();
        }
        
        return redirect()->route('getShoppingCart-' . user_lang());
    }

    /**
     * Show shopping cart
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getShoppingCart(Request $request)
    {
        if(CartProvider::instance()->getQuantity() < 1)
        {
            return redirect()->route('home-' . user_lang());
        }

        $response = WebFrontendService::setCommonResponseValues();
        $response['order']        = session('order');
        // get cart items from shoppingCart
        $response['cartItems']    = CartProvider::instance()->getCartItems();

        return view('www.market.checkout', $response);
    }

    /**
     * Check if coupon code is correct
     *
     * @param   Request $request
     * @return  \Illuminate\Http\JsonResponse
     */
    public function checkCouponCode(Request $request)
    {
        return response()
            ->json(CouponLibrary::checkCouponCode($request->input('couponCode'), user_lang(), auth('crm')));
    }
}