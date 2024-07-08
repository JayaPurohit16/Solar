<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('public/frontend/assets/image/sub-heading-img.svg') }}">

    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/bootstrap.min.css') }}">

    <!-- Rubik Fonst-Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    <!-- rajdhari-Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- remix Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

    <!-- Swiper Slider Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <!-- Animate Css Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/css/libs/animate.min.css" rel="stylesheet">

    <!-- css-file Link -->
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/style.css') }}">

    <!-- responsive Link -->
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/responsive.css') }}">

    <!-- Image Slider Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

</head>

<body>

    @php
        $getProjectTitle = App\Models\Project::orderBy('id', 'DESC')->get();
        $getProductTitle = App\Models\Services::orderBy('id', 'DESC')->get();
        $cms = App\Models\Cms::first();
    @endphp

    @if (Request::route()->getName() == 'frontend.index' ||
            Request::route()->getName() == 'frontend.who-we-are.about-the-company')
        <div class="hero-img">
        @elseif(Request::route()->getName() == 'frontend.who-we-are.leadership' ||
                Request::route()->getName() == 'frontend.products.index' ||
                Request::route()->getName() == 'frontend.project.index' ||
                Request::route()->getName() == 'frontend.news.index' ||
                Request::route()->getName() == 'frontend.news.detail')
            <div class="hero-img leadership-bg">
    @endif
    <div class="container">
        <div class="top-bar">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-bar-list">
                        <div class="top-email">
                            <a href="#"><img src="{{ asset('public/frontend/assets/image/icon/email-icon.svg') }}"
                                    alt="" width="14px" height="14px">
                                {{ isset($cms->support_email) ? $cms->support_email : '' }}</a>
                        </div>
                        <div class="top-phone">
                            <a href="#"><img src="{{ asset('public/frontend/assets/image/icon/phone-icon.svg') }}"
                                    alt="" width="14px" height="14px">
                                +{{ isset($cms->getCountryCode->phonecode) ? $cms->getCountryCode->phonecode : '' }}
                                {{ isset($cms->customer_support) ? $cms->customer_support : '' }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-bar-icon">
                        <div class="bg-color-icon">
                            <a href="{{ isset($cms->facebook_link) ? $cms->facebook_link : '' }}" target="_blank"><img
                                    src="{{ asset('public/frontend/assets/image/icon/facebook-icon.svg') }}"
                                    alt="Facebook Icon" width="14px" height="14px"></a>
                        </div>
                        <div class="bg-color-icon">
                            <a href="{{ isset($cms->twitter_link) ? $cms->twitter_link : '' }}" target="_blank"><img
                                    src="{{ asset('public/frontend/assets/image/icon/twitter-icon.svg') }}"
                                    alt="Facebook Icon" width="14px" height="14px"></a>
                        </div>
                        <div class="bg-color-icon">
                            <a href="{{ isset($cms->linkedin_link) ? $cms->linkedin_link : '' }}" target="_blank"><img
                                    src="{{ asset('public/frontend/assets/image/icon/linkedin-icon.svg') }}"
                                    alt="Facebook Icon" width="14px" height="14px"></a>
                        </div>
                        <div class="bg-color-icon">
                            <a href="{{ isset($cms->instagram_link) ? $cms->instagram_link : '' }}"
                                target="_blank"><img
                                    src="{{ asset('public/frontend/assets/image/icon/instagram-icon.svg') }}"
                                    alt="Facebook Icon" width="14px" height="14px"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-bg-white">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        @if (isset($cms->logo) && file_exists(public_path('Cms/Logo/' . $cms->logo)))
                            <a class="navbar-brand" href="{{ route('frontend.index') }}"><img
                                    src="{{ asset('public/Cms/Logo/' . $cms->logo) }}" alt="Logo"></a>
                        @else
                            <a class="navbar-brand" href="{{ route('frontend.index') }}"><img
                                    src="{{ asset('public/frontend/assets/image/solor-logo.svg') }}"
                                    alt="Logo"></a>
                        @endif
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-4 align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::route()->getName() == 'frontend.index' ? 'active' : '' }}"
                                        aria-current="page" href="{{ route('frontend.index') }}">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-btn dropdown-toggle {{ Request::route()->getName() == 'frontend.who-we-are.about-the-company' || Request::route()->getName() == 'frontend.who-we-are.leadership' ? 'active' : '' }}"
                                        href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Who We Are
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-list">
                                        <li><a class="dropdown-item"
                                                href="{{ route('frontend.who-we-are.about-the-company') }}">About
                                                the
                                                Company</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('frontend.who-we-are.leadership') }}">Leadership</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-btn dropdown-toggle {{ Request::route()->getName() == 'frontend.products.index' ? 'active' : '' }}"
                                        href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Products
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-list">
                                        <li>
                                            @foreach ($getProductTitle as $productTitle)
                                                <a class="dropdown-item"
                                                    href="{{ route('frontend.products.index', base64_encode($productTitle->id)) }}">{{ isset($productTitle->title) ? $productTitle->title : '' }}</a>
                                            @endforeach
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-btn dropdown-toggle {{ Request::route()->getName() == 'frontend.project.index' ? 'active' : '' }}"
                                        href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Project
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-list">
                                        <li>
                                            @foreach ($getProjectTitle as $title)
                                                <a class="dropdown-item"
                                                    href="{{ route('frontend.project.index', base64_encode($title->id)) }}">{{ isset($title->title) ? $title->title : '' }}
                                                </a>
                                            @endforeach
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::route()->getName() == 'frontend.news.index' || Request::route()->getName() == 'frontend.news.detail' ? 'active' : '' }}"
                                        href="{{ route('frontend.news.index') }}">News</a>
                                </li>
                                <li class="nav-item">
                                    <button class="services-btn contact-btn">Contact Us</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            @if (Request::route()->getName() == 'frontend.index' ||
                    Request::route()->getName() == 'frontend.who-we-are.about-the-company')
                <div class="main-canten">
                    <div class="canten-text">
                        <span><img src="{{ asset('public/frontend/assets/image/sub-heading-img.svg') }}"
                                alt="Heading Image">Welcome to solor</span>
                        <h1>Lorem ipsum dolor sit amet <span class="con-bg">consectetu</span></h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda excepturi corrupti harum
                            eveniet quae fugit. Ad tempora tempore omnis numquam! Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.</p>

                        <div class="canten-btn">
                            <button class="services-btn">Our Services</button>
                            <button class="contactnow-btn">Contact Now</button>
                        </div>
                    </div>
                </div>
            @elseif (Request::route()->getName() == 'frontend.who-we-are.leadership')
                <div class="main-canten leadership-conten">
                    <div class="canten-text">
                        <h1>Leadership</h1>
                        <div class="leadership-list">
                            <ol>
                                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                <li><img src="{{ asset('public/frontend/assets/image/svg/leadership-svg.svg') }}"
                                        alt=""></li>
                                <li>Leadership</li>
                            </ol>
                        </div>
                    </div>
                </div>
            @elseif (Request::route()->getName() == 'frontend.products.index')
                <div class="main-canten leadership-conten">
                    <div class="canten-text">
                        <h1>Product</h1>
                        <div class="leadership-list">
                            <ol>
                                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                <li><img src="{{ asset('public/frontend/assets/image/svg/leadership-svg.svg') }}"
                                        alt=""></li>
                                <li>Product</li>
                                <li><img src="{{ asset('public/frontend/assets/image/svg/leadership-svg.svg') }}"
                                        alt=""></li>
                                <li>{{ isset($product->title) ? $product->title : '' }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            @elseif (Request::route()->getName() == 'frontend.project.index')
                <div class="news-detail-header-main-canten leadership-conten">
                    <div class="canten-text">
                        <h1>Project</h1>
                        <div class="leadership-list">
                            <ol>
                                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                <li>
                                    <img src="{{ asset('public/frontend/assets/image/svg/leadership-svg.svg') }}"
                                        alt="" />
                                </li>
                                <li>Project</li>
                                <li>
                                    <img src="{{ asset('public/frontend/assets/image/svg/leadership-svg.svg') }}"
                                        alt="" />
                                </li>
                                <li>{{ isset($project->title) ? $project->title : '' }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            @elseif (Request::route()->getName() == 'frontend.news.index')
                <div class="main-canten leadership-conten">
                    <div class="canten-text">
                        <h1>News</h1>
                        <div class="leadership-list">
                            <ol>
                                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                <li><img src="{{ asset('public/frontend/assets/image/svg/leadership-svg.svg') }}"
                                        alt=""></li>
                                <li>News</li>
                            </ol>
                        </div>
                    </div>
                </div>
            @elseif (Request::route()->getName() == 'frontend.news.detail')
                <div class="news-detail-header-main-canten leadership-conten">
                    <div class="canten-text">
                        <h1>{{ isset($newsDetail->title) ? $newsDetail->title : '' }}</h1>
                        <div class="leadership-list">
                            <ol>
                                <li>{{ isset($newsDetail->date) ? \Carbon\Carbon::parse($newsDetail->date)->format('F d.Y') : '' }}
                                </li>
                                <li>
                                    <img src="{{ asset('public/frontend/assets/image/svg/leadership-svg.svg') }}"
                                        alt="" />
                                </li>
                                <li>By awaiken</li>
                                <li>
                                    <img src="{{ asset('public/frontend/assets/image/svg/leadership-svg.svg') }}"
                                        alt="" />
                                </li>
                                <li>In Uncategorized</li>
                            </ol>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    </div>
