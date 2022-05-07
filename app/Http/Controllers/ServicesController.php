<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PagesSeo;
use App\Models\Services;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Artesaos\SEOTools\Facades\SEOMeta;

class ServicesController extends Controller {
  use SEOToolsTrait;

  public function index() {
    $seo = PagesSeo::where('page_name', 'services')->first();
    if ($seo) {
      $this->seo()->setTitle($seo->title);
      $this->seo()->setDescription($seo->description);
      SEOMeta::setKeywords(explode(', ', $seo->keyword));
    }

    $services = Services::all();

    return view('services', compact('services'));
  }

  public function service($slug) {

    $service = Services::where('slug', $slug)->first();

    return view('service-description', compact('service'));
    return redirect()->route('services');
  }
}