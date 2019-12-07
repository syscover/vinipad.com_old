<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\WebFrontendService;
use Syscover\Cms\Models\Article;
use Syscover\Cms\Models\Category;

class AcademyController extends Controller
{
    public function index(Request $request)
    {
        $response = WebFrontendService::setCommonResponseValues();

        $articles = Article::builder()
            ->where('lang_id', user_lang())
            ->where('section_id', 'academy')
            ->where('status_id', 2)
            ->get()
            ->load('categories');

        $response['dataQty'] = $dataQty = $articles->sum(function ($item) {
            return $item->categories->where('slug',  __('web.data'))->count() > 0? 1 : 0;
        });

        $response['configsQty'] = $dataQty = $articles->sum(function ($item) {
            return $item->categories->where('slug',  __('web.configs'))->count() > 0? 1 : 0;
        });

        $response['stockQty'] = $dataQty = $articles->sum(function ($item) {
            return $item->categories->where('slug',  __('web.stock'))->count() > 0? 1 : 0;
        });

        $response['tabletQty'] = $dataQty = $articles->sum(function ($item) {
            return $item->categories->where('slug',  __('web.tablet'))->count() > 0? 1 : 0;
        });

        $response['othersQty'] = $dataQty = $articles->sum(function ($item) {
            return $item->categories->where('slug',  __('web.others'))->count() > 0? 1 : 0;
        });

        return view('web.academy.index', $response);
    }

    public function article(Request $request)
    {
        $parameters = $request->route()->parameters();

        $response = WebFrontendService::setCommonResponseValues();

        $response['article'] = Article::builder()
            ->where('lang_id', user_lang())
            ->where('slug', $parameters['slug'])
            ->first();

        return view('web.academy.article', $response);
    }

    public function collection(Request $request)
    {
        $parameters = $request->route()->parameters();

        $response = WebFrontendService::setCommonResponseValues();

        $response['articles'] = Article::builder()
            ->where('lang_id', user_lang())
            ->where('section_id', 'academy')
            ->whereHas('categories', function($query) use ($parameters) {
                $query->where('slug', 'like', $parameters['slug']);
            })
            ->get();

        $response['category'] = Category::builder()
            ->where('lang_id', user_lang())
            ->where('slug', $parameters['slug'])
            ->first();

        return view('web.academy.collection', $response);
    }
}
