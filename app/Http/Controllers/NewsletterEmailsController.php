<?php

namespace App\Http\Controllers;

use App\NewsletterEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Subscribed;
use Illuminate\Support\Str;

class NewsletterEmailsController extends Controller {

  public function subscribe (Request $request) {
    $validated = $request->validate([
      'email' => 'required|email|unique:newsletter_subscriptions'
    ]);
   
    $subscriber = new NewsletterEmails;
    $subscriber->email = $request->email;
    $subscriber->token = Str::random(32);
    $subscriber->save();
   
    Mail::to($request->email)->send(new Subscribed($subscriber->token));
    
    return redirect()->route('home');
  }

  public function unsubscribe ($token) {
    NewsletterEmails::where('token', $token)->delete();

    return redirect()->route('home');
  }
}