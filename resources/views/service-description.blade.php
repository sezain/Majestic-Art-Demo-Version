@extends('layouts.master')

<style>
  @media screen and (min-device-width: 1200px) and (max-device-width: 1600px) {
      section#firstSection{
      background-size: 100% !important;
    }
  }


</style>


@section('title', $service->title)

@section('main-content')
<section 
        id="firstSection" 
        class="page-header section-80vh bg-gradient-black bg-black blog-top-bg" 
        style="background: url({{ asset('img/service/'.$service->img) }}); margin-top:115px; background-repeat: no-repeat; background-size: cover;"
      >
  <div class="container">
    <div class="row">             
      <div class="col-xl-12">
        <h1 class="page-header-title text-white">
          <span class="slide-over">{{ $service->title }}</span>
        </h1>
      </div>
     
      <div class="col-xl-12">
        <p class='page-header-text text-lead text-white'>
        <span class="slide-over">
          {{ $service->sub_title }}
        </p>
      </div>
     
    </div>
  </div>        
</section>

<section class="page-main">
    <div class="section-small bg-light">
        <div class="container" data-animation-container class="container" style="background: #fbf6f1; padding: 50px 30px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-single-item bg-black2">
                        <div class="blog-content">                             
                            <span class="blog-text text-black-color">
                              {!! $service->description !!}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection