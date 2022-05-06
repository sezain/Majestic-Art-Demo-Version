@extends('layouts.master')
@section('title', 'News') 

@section('main-content')
<section id="firstSection" class="page-header section-80vh bg-gradient-black bg-black blog-top-bg">
    <div class="container">
        <div class="row">    
            <div class="col-xl-11 ">
                <h1 class="page-header-title text-white">
                    <span class="slide-over">Majestic Arts News</span>
                </h1>
            </div>
        </div>
    </div>
    <div class="bottom-left-links">
        <div>
            <a rel="me" href="https://twitter.com/themajesticarts" class="link text-white" target="_blank">Twitter</a>
        </div>
        <div>
            <a rel="me" href="https://www.instagram.com/themajesticarts/" class="link text-white" target="_blank">Instagram</a>
        </div>
        <div>
            <a rel="me" href="https://www.facebook.com/majesticartsofficial" class="link text-white" target="_blank">Facebook</a>
        </div>
        <div>
            <a rel="me" href="https://www.linkedin.com/company/majesticarts/" class="link text-white" target="_blank">Linkedin</a>
        </div>
    </div>
</section>

<section class="page-main">
    <div class="section-small bg-light">
        <div class="container blog-container">
            <div class="row" style="background: #fbf8f1; padding: 0px 32px;">
                <div class="col-12 my-4">
                    @if ($records->count() > 0)
                        @foreach ($records as $record)
                            <div data-animation-container class="blog-item">
                                <div class="blog-content">
                                    <h3 data-animation-child class="blog-title slide-up"
                                        data-animation="slide-up">
                                        <a class="link text-black-color" data-swup
                                            href="{{ route('article', $record->slug) }}">{{ $record->title }}</a>
                                    </h3>
                                    <p data-animation-child class="blog-text text-black-color slide-up"
                                        data-animation="slide-up">
                                        {{ $record->excerpt }}...
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h2 style='color:red;'>No Post Found!</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

