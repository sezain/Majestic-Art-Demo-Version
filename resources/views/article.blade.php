@extends('layouts.master')
@section('title', $record->title)

@section('main-content')

<section id="firstSection" class="page-header section-80vh bg-gradient-black ">
    <div class="container">
       <div class="row text-center">
            <div class="col-xl-12 text-center">
                <h1 class="blog-title text-white">{{$record->title}}</h1>
            </div>           
        </div>
    </div>
</section>

<section class="page-main">
    <div class="section-small bg-light">
        <div class="container" data-animation-container class="container" style="background: #fbf8f1; padding: 50px 30px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-item bg-black2">
                        <div style="align-items: center">
                            <div class=" lazy" data-bg="">
                                <img width="60%" height="80%" src="{{ asset('event/'.$record->image) }}">
                            </div>
                        </div>
                        <div class="blog-content">
                            {{-- <div class="blog-header">
                                <div class="blog-info">
                                    <p class="text-additional text-black-color">
                                        Posted at: {{$record->created_at}}
                                    </p>
                                </div>
                            </div> --}}
                            <p class="blog-text text-black-color">{!! $record->body !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
