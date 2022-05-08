@extends('layouts.master')
@section('title', $record->title)

@section('main-content')

<section id="firstSection" class="page-header section-80vh bg-gradient-black main-t"  style="background: url({{ asset('event/'.$record->image) }})">
    <div class="container">
       <div class="row ">
            <div class="col-xl-12">
                <h1 class="single-blog-title">{{$record->title}}</h1>
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
                            <span class="blog-text text-black-color">{!! $record->body !!}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
