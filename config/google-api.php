<?php

return [
    /*
	|--------------------------------------------------------------------------
	| Secret Key Google Maps
	|--------------------------------------------------------------------------
	|
	| To obtain this secret key, please visit this URL: https://developers.google.com/maps/
	|
	*/
    'google_maps_api_key' => env('GOOGLE_MAPS_API_KEY', 'your api key'),

    /*
	|--------------------------------------------------------------------------
	| Secret Key Google reCAPTCHA
	|--------------------------------------------------------------------------
	|
	| To obtain this secret key, please visit this URL: https://www.google.com/recaptcha/admin
	|
	*/

    'google_recaptcha_secret_key' => env('GOOGLE_RECAPTCHA_SECRET_KEY', 'your secret key'),

	/*
	|--------------------------------------------------------------------------
	| Site Key Google reCAPTCHA
	|--------------------------------------------------------------------------
	|
	| To obtain this secret key, please visit this URL: https://www.google.com/recaptcha/admin
	|
	*/

	'google_recaptcha_site_key' => env('GOOGLE_RECAPTCHA_SITE_KEY', 'your site key')
];