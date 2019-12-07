<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Syscover\Hotels\Models\Hotel;
use Syscover\Hotels\Models\Service;
use Syscover\Market\Models\Product;
use Syscover\Spas\Models\Spa;
use Syscover\Wineries\Models\Winery;

/**
 * Class SeoFrontendController
 * @package App\Http\Controllers
 */

class SeoFrontendController extends Controller
{
    public function sitemap()
    {
        // create new sitemap object
        $sitemap = App::make("sitemap");

        // set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
        // by default cache is disabled
        $sitemap->setCache('vinipad.sitemap', 60);

        // check if there is cached sitemap and build new only if is not
        if(! $sitemap->isCached())
        {
            // add item to the sitemap (url, date, priority, freq)
            $sitemap->add(route('web.home'),        '2017-02-01T20:00:00+01:00', '1.0', 'daily');

            $sitemap->add(route('home-en', ['country' => 'us']), '2017-02-01T20:00:00+01:00', '1.0', 'daily', [], null, [
                ['language' => 'es', 'url' => route('home-es', ['country' => 'es'])]
            ]);

            $sitemap->add(route('menu-en', ['country' => 'us']), '2017-02-01T20:00:00+01:00', '0.9', 'daily', [], null, [
                ['language' => 'es', 'url' => route('menu-es', ['country' => 'es'])]
            ]);

//            $sitemap->add(route('prices-en', ['country' => 'us']), '2017-02-01T20:00:00+01:00', '0.8', 'daily', [], null, [
//                ['language' => 'es', 'url' => route('prices-es', ['country' => 'es'])]
//            ]);

            $sitemap->add(route('faqs-en', ['country' => 'us']), '2017-02-01T20:00:00+01:00', '0.7', 'daily', [], null, [
                ['language' => 'es', 'url' => route('faqs-es', ['country' => 'es'])]
            ]);

            $sitemap->add(route('contact-en', ['country' => 'us']), '2017-02-01T20:00:00+01:00', '0.6', 'daily', [], null, [
                ['language' => 'es', 'url' => route('contact-es', ['country' => 'es'])]
            ]);

            $sitemap->add(route('getChooseCountry-en', ['country' => 'us']), '2017-02-01T20:00:00+01:00', '0.5', 'daily', [], null, [
                ['language' => 'es', 'url' => route('getChooseCountry-es', ['country' => 'es'])]
            ]);
        }

        // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
        return $sitemap->render('xml');
    }
}