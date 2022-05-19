<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\PagesSeo;
use Mail;

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    use SEOToolsTrait;

    public function index()
    {
        $seo = PagesSeo::where('page_name', 'home')->first();

        if ($seo) {
            $this->seo()->setTitle($seo->title);
            $this->seo()->setDescription($seo->description);
            SEOMeta::setKeywords(explode(', ', $seo->keyword));
        }
        
        $posts = News::orderBy('created_at', 'desc')->take(3)->get();
        return view('home', compact('posts'));
    }

}