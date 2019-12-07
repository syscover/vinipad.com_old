<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\WebFrontendService;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Subscription;

class StripeController extends Controller
{
    public function stripe(Request $request)
    {
        $parameters = $request->route()->parameters();
        $response = WebFrontendService::setCommonResponseValues();

        // Set mode
        if(config('pulsar-market.stripeMode') == 'test')
        {
            $response['publishKey'] = config('pulsar-market.stripeTestPublishKey');
        }
        elseif(config('pulsar-market.stripeMode') == 'live')
        {
            $response['publishKey'] = config('pulsar-market.stripeLivePublishKey');
        }
        else
        {
            throw new \Exception('You must set MARKET_STRIPE_MODE like test or live');
        }

        // get product from config stripe
        $products = collect(config('stripe-' . config('pulsar-market.stripeMode') . '.products'));

        if($products->firstWhere('product_id', $parameters['product'])) $response['product'] = collect($products->firstWhere('product_id', $parameters['product'])); else abort(404);

        return view('web.content.stripe', $response);
    }

    public function stripeCheckout(Request $request)
    {
        // Set mode
        if(config('pulsar-market.stripeMode') == 'test')
        {
            $secretKey = config('pulsar-market.stripeTestSecretKey');
        }
        elseif(config('pulsar-market.stripeMode') == 'live')
        {
            $secretKey = config('pulsar-market.stripeLiveSecretKey');
        }
        else
        {
            throw new \Exception('You must set MARKET_STRIPE_MODE like test or live');
        }

        // Be sure to replace this with your actual test API key
        // (switch to the live key later)
        Stripe::setApiKey($secretKey);

        $product = collect(collect(config('stripe-' . config('pulsar-market.stripeMode') . '.products'))->firstWhere('product_id', $request->input('product_id')));

        try
        {
            $customer = Customer::create([
                'email'     => $request->input('stripeEmail'),
                'source'    => $request->input('stripeToken')
            ]);

            // check is is a subscription
            if($product->has('plan_id'))
            {
                $subscription = Subscription::create([
                    'customer'  => $customer->id,
                    'items'     => [
                        ['plan' => $product->get('plan_id')]
                    ]
                ]);
            }
            else
            {
                $charge = Charge::create([
                    'customer' => $customer->id,
                    'amount'   => $product->get('amount'),
                    'currency' => $product->get('currency')
                ]);
            }

            return redirect()->route('web.stripe_ok-' . user_lang(), ['product' => $request->input('product_id')]);

        }
        catch(\Exception $e)
        {
            dd('unable to sign up customer:' . $request->input('stripeEmail') . ', error:' . $e->getMessage());
        }
    }

    public function stripeOk(Request $request)
    {
        $parameters = $request->route()->parameters();
        $response = WebFrontendService::setCommonResponseValues();

        // get product from config stripe
        $response['product'] = collect(collect(config('stripe-' . config('pulsar-market.stripeMode') . '.products'))->firstWhere('product_id', $parameters['product']));
        $response['stripeOk'] = true;

        return view('web.content.stripe', $response);
    }
}
