<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PagesSeo;
use App\Models\Category;

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Artesaos\SEOTools\Facades\SEOMeta;

class CollectionController extends Controller {
  use SEOToolsTrait;

  public function index() {
    $seo = PagesSeo::where('page_name', 'collection')->first();
    if ($seo) {
      $this->seo()->setTitle($seo->title);
      $this->seo()->setDescription($seo->description);
      SEOMeta::setKeywords(explode(', ', $seo->keyword));
    }

    $categories = Category::all();

    return view('collection', compact('categories'));
  }
}