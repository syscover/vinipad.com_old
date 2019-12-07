<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Syscover\Admin\Models\Country;
use App\Http\Services\WebFrontendService;

class WebFrontendController extends Controller
{
    public function home(Request $request)
    {
        $response = WebFrontendService::setCommonResponseValues();

        user_country();

        return view('web.content.home', $response);
    }

    public function menu(Request $request)
    {
        $response = WebFrontendService::setCommonResponseValues();

        return view('web.content.menu', $response);
    }
    public function menu4(Request $request)
    {
        $response = WebFrontendService::setCommonResponseValues();

        return view('web.content.menu4', $response);
    }

    public function prices(Request $request)
    {
        $response = WebFrontendService::setCommonResponseValues();

        return view('web.content.prices', $response);
    }

    public function faqs(Request $request)
    {
        $response = WebFrontendService::setCommonResponseValues();

        return view('web.content.faqs', $response);
    }

    public function contact(Request $request)
    {
        $response = WebFrontendService::setCommonResponseValues();

        return view('web.content.contact', $response);
    }
    public function contact4(Request $request)
    {
        $response = WebFrontendService::setCommonResponseValues();

        return view('web.content.contact4', $response);
    }

    public function signUp(Request $request)
    {
        $response = WebFrontendService::setCommonResponseValues();

        return view('web.market.checkout', $response);
    }

    public function requestInfo(Request $request)
    {
        $response = WebFrontendService::setCommonResponseValues();

        return view('web.content.request-info', $response);
    }

    public function getChooseCountry(Request $request)
    {
        $response       = WebFrontendService::setCommonResponseValues();
        $countries      = collect(config('web-vinipad.countries'));

        $countriesModel = Country::where('lang_id', user_lang())
            ->whereIn('id', $countries->flatten())
            ->orderBy('name', 'asc')
            ->get();

        $response['countriesSelect'] = [
            'europe'    => [],
            'america'   => [],
            'asia'      => [],
            'africa'    => [],
            'oceania'   => []
        ];

        foreach($countriesModel as $countryModel)
        {
            foreach($countries as $continentName => $country)
            {
                if(in_array($countryModel->id, $country))
                {
                    $response['countriesSelect'][$continentName][$countryModel->id] = $countryModel;
                }
            }
        }

        return view('web.content.choose-country', $response);
    }

    public function postChooseCountry(Request $request)
    {
        change_lang($request->input('chosenLang'));
        change_country($request->input('chosenCountry'));

        return redirect()->route('home-' . user_lang());
    }

    public function error(Request $request)
    {
        $response           = WebFrontendService::setCommonResponseValues();
        $parameters         = $request->route()->parameters();
        $response['code']   = $parameters['code'];

        return view('web.content.error', $response);
    }

    public function sendContact(Request $request)
    {
        $form['nameForm']       = $request->input('name');
        $form['emailForm']      = $request->input('email');
        $form['countryForm']    = $request->input('country');
        $form['messageForm']    = $request->input('message');

        if ($request->input('surname'))
        {
            $name               = $form['nameForm'];
            $surname            = $request->input('surname');
            $form['nameForm']   = $name.' '.$surname;
        }

        if(user_lang() == 'es')
        {
            $subject = 'Vinipad - Formulario de contacto recibido';
        }
        else
        {
            $subject = 'Vinipad - Contact form received succesfully';
        }

        Mail::send('emails.content.contact', $form,
            function ($m) use ($form, $subject) {
                $m->from('app@vinipad.com', 'Vinipad');
                $m->replyTo('info@vinipad.com', 'Vinipad');
                $m->bcc('contact@vinipad.com', 'Vinipad');
                $m->to($form['emailForm'], $form['nameForm']);
                $m->subject($subject);
            });

        return response()->json([
            'status'    => 'success',
            'name'      => $form['nameForm'],
            'email'     => $form['emailForm'],
            'country'   => $form['countryForm'],
            'message'   => $form['messageForm']
        ]);
    }

    public function sendQuoteEmail(Request $request)
    {
        $form['restaurantName'] = $request->input('restaurant_name');
        $form['clientName']     = $request->input('client_name');
        $form['clientEmail']    = $request->input('client_email');
        $form['clientCountry']  = $request->input('client_country');
        $form['clientPhone']    = $request->input('client_phone');

        $form['subject'] = 'Vinipad - Solicitud de presupuesto recibida';

        Mail::send('emails.content.quote', $form,
        function ($m) use ($form) {
            $m->from('app@vinipad.com', 'Vinipad');
            $m->replyTo('info@vinipad.com', 'Vinipad');
            $m->to('info@vinipad.com', 'Vinipad');
            $m->subject($form['subject']);
        });

        return response()->json([
            'status'    => 'success',
            'restaurant'=> $form['restaurantName'],
            'name'      => $form['clientName'],
            'email'     => $form['clientEmail'],
            'country'   => $form['clientCountry'],
            'phone'     => $form['clientPhone']
        ]);
    }

    public function blog(Request $request)
    {
        $response = WebFrontendService::setCommonResponseValues();

        return view('web.content.blog', $response);
    }

    public function post(Request $request)
    {
        $response = WebFrontendService::setCommonResponseValues();

        return view('web.content.post', $response);
    }
}
