<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

use App\Models\PagesSeo;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Artesaos\SEOTools\Facades\SEOMeta;

class EventController extends Controller {
    use SEOToolsTrait;

    public function index($slug = null) {
        $seo = PagesSeo::where('page_name', 'events')->first();
        if ($seo) {
            $this->seo()->setTitle($seo->title);
            $this->seo()->setDescription($seo->description);
            SEOMeta::setKeywords(explode(', ', $seo->keyword));
        }

        $records = Events::orderBy('created_at', 'desc')->get();
        return view('events', compact('records'));
    }

}
