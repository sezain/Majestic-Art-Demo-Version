<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PagesSeo;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Artesaos\SEOTools\Facades\SEOMeta;

class BoardMembersController extends Controller {
  use SEOToolsTrait;

  public function index() {
    $seo = PagesSeo::where('page_name', 'board_members')->first();
    if ($seo) {
      $this->seo()->setTitle($seo->title);
      $this->seo()->setDescription($seo->description);
      SEOMeta::setKeywords(explode(', ', $seo->keyword));
    }

    return view('board-members');
  }
}