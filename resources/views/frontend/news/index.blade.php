@extends('frontend.layouts.main')
@section('main')
<section class="articl-sec coomen-index-padding fadeup-animation-card onview-port">
    <div class="container p-sm-1 p-0">
        <div class="news-artical-mt">
            <div class="row">
                @foreach ($getNews as $news)
                    <div class="col-lg-4 col-md-6">
                        <div class="articl-sec-card news-card-mb">
                            @if (isset($news->image) && file_exists(public_path('News/Image/' . $news->image)))
                                <img class="articl-bg-img" src="{{ asset('public/News/Image/' . $news->image) }}"
                                    alt="Articl Image">
                            @else
                                <img class="articl-bg-img" src="{{ asset('public/frontend/assets/image/articl-img.jpg') }}"
                                    alt="Articl Image">
                            @endif
                            <div class="articl-sec-card-bg">
                                <h2><a
                                        href="{{ route('frontend.news.detail', base64_encode($news->id)) }}">{{ isset($news->title) ? $news->title : '' }}</a>
                                </h2>
                                <div class="articl-sec-flex">
                                    <span><a href="{{ route('frontend.news.detail', base64_encode($news->id)) }}"><img
                                                src="{{ asset('public/frontend/assets/image/icon/calendar-icon.svg') }}"
                                                alt="">{{ isset($news->date) ? \Carbon\Carbon::parse($news->date)->format('F d, Y') : '' }}</a></span>
                                </div>
                                <a href="{{ route('frontend.news.detail', base64_encode($news->id)) }}"><button
                                        class="services-btn">Read
                                        More</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="articl-sec-card news-card-mb">
                        <img src="{{ asset('frontend/assets/image/articl-1-img.jpg') }}" alt="Articl Image">
                        <div class="articl-sec-card-bg">
                            <h2><a href="{{ route('frontend.news.detail') }}">Lorem, ipsum dolor sit amet
                                    consectetur</a></h2>
                            <div class="articl-sec-flex">
                                <span><a href="{{ route('frontend.news.detail') }}"><img
                                            src="{{ asset('frontend/assets/image/icon/calendar-icon.svg') }}"
                                            alt="">March 19,
                                        2024</a></span>
                            </div>
                            <a href="{{ route('frontend.news.detail') }}"><button class="services-btn">Read
                                    More</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="articl-sec-card news-card-mb">
                        <img src="{{ asset('frontend/assets/image/articl-2-img.jpg') }}" alt="Articl Image">
                        <div class="articl-sec-card-bg">
                            <h2><a href="{{ route('frontend.news.detail') }}">Lorem, ipsum dolor sit amet
                                    consectetur</a></h2>
                            <div class="articl-sec-flex">
                                <span><a href="{{ route('frontend.news.detail') }}"><img
                                            src="{{ asset('frontend/assets/image/icon/calendar-icon.svg') }}"
                                            alt="">March 19,
                                        2024</a></span>
                            </div>
                            <a href="{{ route('frontend.news.detail') }}"><button class="services-btn">Read
                                    More</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="articl-sec-card news-card-mb">
                        <img src="{{ asset('frontend/assets/image/slider-4-img.jpg') }}" alt="Articl Image">
                        <div class="articl-sec-card-bg">
                            <h2><a href="{{ route('frontend.news.detail') }}">Lorem, ipsum dolor sit amet
                                    consectetur</a></h2>
                            <div class="articl-sec-flex">
                                <span><a href="{{ route('frontend.news.detail') }}"><img
                                            src="{{ asset('frontend/assets/image/icon/calendar-icon.svg') }}"
                                            alt="">March 19,
                                        2024</a></span>
                            </div>
                            <a href="{{ route('frontend.news.detail') }}"><button class="services-btn">Read
                                    More</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="articl-sec-card news-card-mb">
                        <img src="{{ asset('frontend/assets/image/planning-sec-img.jpg') }}" alt="Articl Image">
                        <div class="articl-sec-card-bg">
                            <h2><a href="{{ route('frontend.news.detail') }}">Lorem, ipsum dolor sit amet
                                    consectetur</a></h2>
                            <div class="articl-sec-flex">
                                <span><a href="{{ route('frontend.news.detail') }}"><img
                                            src="{{ asset('frontend/assets/image/icon/calendar-icon.svg') }}"
                                            alt="">March 19,
                                        2024</a></span>
                            </div>
                            <a href="{{ route('frontend.news.detail') }}"><button class="services-btn">Read
                                    More</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="articl-sec-card news-card-mb">
                        <img src="{{ asset('frontend/assets/image/news-img-right.jpg') }}" alt="Articl Image">
                        <div class="articl-sec-card-bg">
                            <h2><a href="{{ route('frontend.news.detail') }}">Lorem, ipsum dolor sit amet
                                    consectetur</a></h2>
                            <div class="articl-sec-flex">
                                <span><a href="{{ route('frontend.news.detail') }}"><img
                                            src="{{ asset('frontend/assets/image/icon/calendar-icon.svg') }}"
                                            alt="">March 19,
                                        2024</a></span>
                            </div>
                            <a href="{{ route('frontend.news.detail') }}"><button class="services-btn">Read
                                    More</button></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
@endsection