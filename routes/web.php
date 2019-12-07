<?php

Route::group(['middleware' => ['pulsar.navtools']], function() {

    /* WEB */
    Route::get('/',                                             '\App\Http\Controllers\WebFrontendController@home')->name('web.home');

    Route::get('/en-{country}/stripe/{product}',                '\App\Http\Controllers\StripeController@stripe')->name('web.stripe-en');
    Route::get('/es-{country}/stripe/{product}',                '\App\Http\Controllers\StripeController@stripe')->name('web.stripe-es');
    Route::post('/en-{country}/stripe/checkout',                '\App\Http\Controllers\StripeController@stripeCheckout')->name('web.stripe_checkout-en');
    Route::post('/es-{country}/stripe/checkout',                '\App\Http\Controllers\StripeController@stripeCheckout')->name('web.stripe_checkout-es');
    Route::get('/en-{country}/stripe/checkout/{product}/ok',    '\App\Http\Controllers\StripeController@stripeOk')->name('web.stripe_ok-en');
    Route::get('/es-{country}/stripe/checkout/{product}/ok',    '\App\Http\Controllers\StripeController@stripeOk')->name('web.stripe_ok-es');

    /* EN */
    Route::get('en-{country}',                                 '\App\Http\Controllers\WebFrontendController@home')->name('home-en');
    Route::get('en-{country}/the-menu',                        '\App\Http\Controllers\WebFrontendController@menu')->name('menu-en');
    Route::get('en-{country}/faqs',                            '\App\Http\Controllers\WebFrontendController@faqs')->name('faqs-en');
    Route::get('en-{country}/contact',                         '\App\Http\Controllers\WebFrontendController@contact')->name('contact-en');
    Route::get('en-{country}/choose-country',                  '\App\Http\Controllers\WebFrontendController@getChooseCountry')->name('getChooseCountry-en');
    Route::get('en-{country}/blog',                            '\App\Http\Controllers\WebFrontendController@blog')->name('blog-en');
    Route::get('en-{country}/error/{code}',                    '\App\Http\Controllers\WebFrontendController@error')->name('error-en');

    /* ES */
    Route::get('es-{country}',                                 '\App\Http\Controllers\WebFrontendController@home')->name('home-es');
    Route::get('es-{country}/la-carta',                        '\App\Http\Controllers\WebFrontendController@menu')->name('menu-es');
    Route::get('es-{country}/la-carta4',                       '\App\Http\Controllers\WebFrontendController@menu4')->name('menu4-es');
    Route::get('es-{country}/faqs',                            '\App\Http\Controllers\WebFrontendController@faqs')->name('faqs-es');
    Route::get('es-{country}/contacto',                        '\App\Http\Controllers\WebFrontendController@contact')->name('contact-es');
    Route::get('es-{country}/contacto4',                       '\App\Http\Controllers\WebFrontendController@contact4')->name('contact4-es');
    Route::get('es-{country}/elegir/pais',                     '\App\Http\Controllers\WebFrontendController@getChooseCountry')->name('getChooseCountry-es');
    Route::get('es-{country}/blog',                            '\App\Http\Controllers\WebFrontendController@blog')->name('blog-es');
    Route::get('es-{country}/error/{code}',                    '\App\Http\Controllers\WebFrontendController@error')->name('error-es');


    /* FORMS */
    /* EN */
    Route::post('en-{country}/quote/email/send',               '\App\Http\Controllers\WebFrontendController@sendQuoteEmail')->name('sendQuoteEmail-en');
    Route::post('en-{country}/contact/email/send',             '\App\Http\Controllers\WebFrontendController@sendContact')->name('web.send.contact-en');
    // url from AppStore and GooglePlay
    Route::get('en-{country}/request/information/{platform}',  '\App\Http\Controllers\WebFrontendController@requestInfo')->name('requestInformation-en');

    /* ES */
    Route::post('es-{country}/presupuesto/email/enviar',       '\App\Http\Controllers\WebFrontendController@sendQuoteEmail')->name('sendQuoteEmail-es');
    Route::post('es-{country}/contacto/email/enviar',          '\App\Http\Controllers\WebFrontendController@sendContact')->name('web.send.contact-es');
    // url from AppStore and GooglePlay
    Route::get('es-{country}/peticion/informacion/{platform}', '\App\Http\Controllers\WebFrontendController@requestInfo')->name('requestInformation-es');

    /* BLOG */
    /* ES */
    Route::get('en-{country}/blog',                            '\App\Http\Controllers\WebFrontendController@blog')->name('blog-en');
    Route::get('en-{country}/blog/post',                       '\App\Http\Controllers\WebFrontendController@post')->name('post-en');

    /* EN */
    Route::get('es-{country}/blog',                            '\App\Http\Controllers\WebFrontendController@blog')->name('blog-es');
    Route::get('es-{country}/blog/post',                       '\App\Http\Controllers\WebFrontendController@post')->name('post-es');

    /* ACADEMY */
    /* EN */
    Route::get('en-{country}/academy',                          '\App\Http\Controllers\AcademyController@index')->name('academy-en');
    Route::get('en-{country}/academy/article/{slug}',           '\App\Http\Controllers\AcademyController@article')->name('article-en');
    Route::get('en-{country}/academy/collection/{slug}',        '\App\Http\Controllers\AcademyController@collection')->name('collection-en');

    /* ES */
    Route::get('es-{country}/academy',                          '\App\Http\Controllers\AcademyController@index')->name('academy-es');
    Route::get('es-{country}/academy/article/{slug}',           '\App\Http\Controllers\AcademyController@article')->name('article-es');
    Route::get('es-{country}/academy/coleccion/{slug}',         '\App\Http\Controllers\AcademyController@collection')->name('collection-es');



    /* REDIRECTS */
    Route::get('{lang}-{locale}/productos/vinipad_carta_profesional/solicitud_de_tarifa/{rate}/{platform}', function ($lang, $country, $rate, $platform) {
        return redirect(nt_route('requestInformation-' . user_lang(), ['platform' => $platform]));
    });




    //Route::get('es-{country}/contratar',                       ['as'=>'signup-es',                          'uses'	=> '\App\Http\Controllers\WebFrontendController@signUp']);
    //Route::get('es-{country}/precios',                         ['as'=>'prices-es',                          'uses'	=> '\App\Http\Controllers\WebFrontendController@prices']);
    //Route::get('en-{country}/prices',                          '\App\Http\Controllers\WebFrontendController@prices')->name('prices-en');


    //Route::get('en-{country}/sign-up',                         ['as'=>'signup-en',                          'uses'	=> '\App\Http\Controllers\WebFrontendController@signUp']);


    //Route::post('en-{country}/checkout',                       ['as'=>'postShoppingCart-en',                'uses'	=> '\App\Http\Controllers\ShoppingCartController@postShoppingCart']);
    //Route::get('en-{country}/checkout',                        ['as'=>'getShoppingCart-en',                 'uses'	=> '\App\Http\Controllers\ShoppingCartController@getShoppingCart']);
    //Route::post('en-{country}/payment',                        ['as'=>'postCheckout01-en',                  'uses'	=> '\App\Http\Controllers\MarketFrontendController@postCheckout03']);
    //Route::get('en-{country}/purchase-completed/{order}',      ['as'=>'purchaseCompleted-en',               'uses'	=> '\App\Http\Controllers\MarketFrontendController@purchaseCompleted']);

    //Route::post('es-{country}/finalizacion-de-compra',         ['as'=>'postShoppingCart-es',                'uses'	=> '\App\Http\Controllers\ShoppingCartController@postShoppingCart']);
    //Route::get('es-{country}/finalizacion-de-compra',          ['as'=>'getShoppingCart-es',                 'uses'	=> '\App\Http\Controllers\ShoppingCartController@getShoppingCart']);
    //Route::post('es-{country}/pago',                           ['as'=>'postCheckout01-es',                  'uses'	=> '\App\Http\Controllers\MarketFrontendController@postCheckout03']);
    //Route::get('es-{country}/compra-finalizada/{order}',       ['as'=>'purchaseCompleted-es',               'uses'	=> '\App\Http\Controllers\MarketFrontendController@purchaseCompleted']);
});

Route::post('choose-country',                                   '\App\Http\Controllers\WebFrontendController@postChooseCountry')->name('postChooseCountry');

/* SITEMAP */
Route::get('/sitemap',                                          '\App\Http\Controllers\SeoFrontendController@sitemap')->name('web.sitemap');





/* REDSYS */
//Route::get('redsys/payment/response/successful',                ['as' => 'redsysPaymentResponseSuccessful', 'uses' => '\App\Http\Controllers\MarketFrontendController@redsysPaymentResponseSuccessful']);
//Route::get('redsys/payment/response/failure',                   ['as' => 'redsysPaymentResponseFailure',    'uses' => '\App\Http\Controllers\MarketFrontendController@redsysPaymentResponseFailure']);

/* REDSYS */
// This route is register in App\Http\Middleware\VerifyCsrfToken in $except array to avoid csrf
//Route::post('redsys/payment/response',                          ['as' => 'redsysPaymentResponse',           'uses' => '\App\Http\Controllers\MarketFrontendController@redsysPaymentResponse']);

/* PAYPAL */
//Route::post('/paypal/payment/response/successful',              ['as' => 'payPalPaymentResponseSuccessful', 'uses' => '\App\Http\Controllers\MarketFrontendController@payPalPaymentResponseSuccessful']);
//Route::get('/paypal/payment/response/failure',                  ['as' => 'payPalPaymentResponseFailure',    'uses' => '\App\Http\Controllers\MarketFrontendController@payPalPaymentResponseFailure']);

/* DEV */
//Route::get('/clientes',                                       ['as'=>'clients',                           function(){ return view('www.content.clients',                  []  );}   ]);
