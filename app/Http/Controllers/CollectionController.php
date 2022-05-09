<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PagesSeo;
use App\Models\Category;
use App\Models\Artist;

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

    $categories = array();
    $artists = Artist::with('categories')->orderBy('lifespan')->get();

    foreach($artists as $artist) {
      if (!array_key_exists($artist->categories->implode('name', ', '), $categories)) {
        $categories[$artist->categories->implode('name', ', ')] = array();
      }
      array_push($categories[$artist->categories->implode('name', ', ')], $artist);
    }

    return view('collection', compact('categories'));
  }
}