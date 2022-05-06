<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Subscribed;
use Illuminate\Support\Str;

class NewsController extends Controller {

  public function index() {
    $records = News::orderBy('created_at', 'desc')->get();

    return view('news', compact('records'));
  }
  

  public function article($slug) {
    $record = News::where('slug', $slug)->first();

    return view('article', compact('record'));
  }
}
