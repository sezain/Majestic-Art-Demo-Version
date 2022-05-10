<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

use App\Models\PagesSeo;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Artesaos\SEOTools\Facades\SEOMeta;

class NewsController extends Controller {

  use SEOToolsTrait;

  public function index() {
    $seo = PagesSeo::where('page_name', 'news')->first();

    if ($seo) {
        $this->seo()->setTitle($seo->title);
        $this->seo()->setDescription($seo->description);
        SEOMeta::setKeywords(explode(', ', $seo->keyword));
    }

    $records = News::orderBy('created_at', 'desc')->get();
    
    return view('news', compact('records'));
  }
  

  public function article($slug) {
    $record = News::where('slug', $slug)->first();


    $this->seo()->setTitle($record->title);
    $this->seo()->setDescription($record->description_content);
    $this->seo()->opengraph()->addImage(['url' => asset('event/'.$record->image)] );
    $this->seo()->opengraph()->addProperty('locale', 'en');
    $this->seo()->opengraph()->addProperty('type', 'article');
    SEOMeta::setKeywords(explode(', ', $record->keywords_content));


    return view('article', compact('record'));
  }
}
