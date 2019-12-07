<?php namespace App\Http\Services;

use Syscover\Admin\Models\Country;


class WebFrontendService
{
    public static function setCommonResponseValues()
    {
        $response['countries'] = Country::builder()
            ->where('lang_id', user_lang())
            ->whereIn('id', collect(config('web-vinipad.countries'))->flatten())
            ->orderBy('name')
            ->get();

        return $response;
    }
}
