@extends('layouts.master')
@section('title', $service->title)

@section('main-content')
<section id="firstSection" class="page-header section-80vh bg-gradient-black bg-black blog-top-bg" style="background: url({{url('/public/img/art-category/Western-Art.jpg')}}); background-size: 100%; margin-top:115px; background-repeat: no-repeat;">
  <div class="container">
    <div class="row">             
      <div class="col-xl-12 offset-xl-1">
        <h1 class="page-header-title text-white">
          <span class="slide-over">{{ $service->title }}</span>
        </h1>
      </div>
      <div class="col-xl-12 offset-xl-1">
        <p class='page-header-text text-lead text-white'>
        <span class="slide-over">
          {{ $service->sub_title }}
        </p>
      </div>
    </div>
  </div>        
</section>

<section class="page-main">
  <div class="section-large">
    <div data-animation-container class="container">
      <div class="row" style="background: #fbf8f1; padding: 0px 30px;">
        <div class="col-lg-12">
          <div class="blog-item">
            <div class="blog-content">
                {!! $service->content !!}
            </div>
          </div>
        </div>
      </div>       
    </div>
  </div>
</section>
@endsection