<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\PagesSeo;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Artesaos\SEOTools\Facades\SEOMeta;

class ContactController extends Controller {
  use SEOToolsTrait;

  public function index() {
    $seo = PagesSeo::where('page_name', 'contact')->first();
    if ($seo) {
      $this->seo()->setTitle($seo->title);
      $this->seo()->setDescription($seo->description);
      SEOMeta::setKeywords(explode(', ', $seo->keyword));
    }

    return view('contact');
  }

  public function sendmail(Request $request) {
  
      $data['name'] = $request->name;
      $data['email'] = $request->email;
      $data['msg'] = $request->message;

      Mail::send('contactus-notification', $data, function($message) use ($data) {
          $message->from('info@majesticarts.com');
          $message->subject('Contact Us');
          $message->to('info@majesticarts.com');
      });
      
      return redirect()->route('home');
  }
}