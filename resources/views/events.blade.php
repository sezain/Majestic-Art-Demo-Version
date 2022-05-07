@extends('layouts.master')
@section('title', 'Events')

@section('main-content')
<section id="firstSection" class="page-header section-80vh" style="background: #fff">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h1 class="page-header-title text-black">
                    <span class="slide-over">Events</span>
                </h1>
            </div>
            <br> <br> <br/> <br/> <br/>
            <div class="col-xl-12">
                <p class='page-header-text text-lead text-black'>
                    <span class="slide-over">Coming Soon please wait until further notice.</span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="page-main" style="background: #fff">
    <div class="section-small">
        <div class="container blog-container">
            <div class="row">
                <div class="col-lg-12">
                    @if ($records->count() > 0)
                        @foreach($records as $record)
                            <div data-animation-container class="blog-item ">
                                <a data-animation-child data-swup href="{{ route('events', $record->slug)}}" class="blog-img blog-img-hover cover-right" data-animation="cover-right">
                                    <div class="bg-image lazy" data-bg="url({{ asset('event/'.$record->image) }})"></div>
                                </a>
                                <div class="blog-content">
                                    <div data-animation-child class="blog-header slide-right"  data-animation="slide-right">
                                        <div class="blog-info">
                                            <p class="text-additional text-black">
                                                <a href="#" class="link"><?php echo date("M d, Y", strtotime($record->created_at)); ?></a>
                                                -
                                                <a href="#" class="link">{{$record->title}}</a>
                                            </p>
                                        </div>
                                    </div>
                                    <h3 data-animation-child class="blog-title slide-up delay-8" data-animation="slide-up">
                                        <a class="link" data-swup href="{{ route('events', $record->slug)}}">{{$record->title}}</a>
                                    </h3>
                                    <p data-animation-child class="blog-text text-light-gray slide-up delay-9" data-animation="slide-up">
                                        {{$record->excerpt}}...
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h2 style='color:red; opacity: 0;'>No Post Found!</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


