<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/image/sub-heading-img.svg') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

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

    <!-- Swiper Slider Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <!-- Animate Css Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/css/libs/animate.min.css" rel="stylesheet">

    <!-- css-file Link -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    <!-- responsive Link -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">

    <!-- Product Css Link -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/product.css') }}" />

</head>

<body>

    @if (Request::route()->getName() == 'frontend.index' ||
            Request::route()->getName() == 'frontend.who-we-are.about-the-company')
        <div class="hero-img">
            <div class="container">
                <div class="top-bar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top-bar-list">
                                <div class="top-email">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/email-icon.svg') }}"
                                            alt="" width="14px" height="14px">
                                        info@domain.com</a>
                                </div>
                                <div class="top-phone">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/phone-icon.svg') }}"
                                            alt="" width="14px" height="14px">
                                        +01 248 248 2481</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-bar-icon">
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/facebook-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/twitter-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/linkedin-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/instagram-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-bg-white">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="{{ route('frontend.index') }}"><img
                                        src="{{ asset('frontend/assets/image/solor-logo.svg') }}" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-5 align-items-center">
                                        <li class="nav-item">
                                            <a class="nav-link {{ Request::route()->getName() == 'frontend.index' ? 'active' : '' }}"
                                                aria-current="page" href="{{ route('frontend.index') }}">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle {{ Request::route()->getName() == 'frontend.who-we-are.about-the-company' || Request::route()->getName() == 'frontend.who-we-are.leadership' ? 'active' : '' }}"
                                                href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Who We Are
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
                                        <li class="nav-item">
                                            <a class="nav-link {{ Request::route()->getName() == 'frontend.products.index' ? 'active' : '' }}"
                                                href="{{ route('frontend.products.index') }}">Products
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Projects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ Request::route()->getName() == 'frontend.news.index' ? 'active' : '' }}"
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
                    <div class="main-canten">
                        <div class="canten-text">
                            <span><img src="{{ asset('frontend/assets/image/sub-heading-img.svg') }}"
                                    alt="Heading Image">Welcome to solor</span>
                            <h1>Lorem ipsum dolor sit amet <span class="con-bg">consectetu</span></h1>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda excepturi corrupti
                                harum
                                eveniet quae fugit. Ad tempora tempore omnis numquam! Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit.</p>

                            <div class="canten-btn">
                                <button class="services-btn">Our Services</button>
                                <button class="contactnow-btn">Contact Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif (Request::route()->getName() == 'frontend.who-we-are.leadership')
        <div class="hero-img leadership-bg">
            <div class="container">
                <div class="top-bar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top-bar-list">
                                <div class="top-email">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/email-icon.svg') }}"
                                            alt="" width="14px" height="14px">
                                        info@domain.com</a>
                                </div>
                                <div class="top-phone">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/phone-icon.svg') }}"
                                            alt="" width="14px" height="14px">
                                        +01 248 248 2481</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-bar-icon">
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/facebook-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/twitter-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/linkedin-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/instagram-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-bg-white">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="{{ route('frontend.index') }}"><img
                                        src="{{ asset('frontend/assets/image/solor-logo.svg') }}" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-5 align-items-center">
                                        <li class="nav-item">
                                            <a class="nav-link {{ Request::route()->getName() == 'frontend.index' ? 'active' : '' }}"
                                                aria-current="page" href="{{ route('frontend.index') }}">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle {{ Request::route()->getName() == 'frontend.who-we-are.about-the-company' || Request::route()->getName() == 'frontend.who-we-are.leadership' ? 'active' : '' }}"
                                                href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Who We Are
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
                                        <li class="nav-item">
                                            <a class="nav-link {{ Request::route()->getName() == 'frontend.products.index' ? 'active' : '' }}"
                                                href="{{ route('frontend.products.index') }}">Products
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Projects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ Request::route()->getName() == 'frontend.news.index' ? 'active' : '' }}"
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
                    <div class="main-canten leadership-conten">
                        <div class="canten-text">
                            <h1>Leadership</h1>
                            <div class="leadership-list">
                                <ol>
                                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                    <li><img src="{{ asset('frontend/assets/image/svg/leadership-svg.svg') }}"
                                            alt=""></li>
                                    <li>Leadership</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif (Request::route()->getName() == 'frontend.products.index')
        <div class="product-img">
            <div class="container">
                <div class="top-bar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top-bar-list">
                                <div class="top-email">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/email-icon.svg') }}"
                                            alt="" width="14px" height="14px">
                                        info@domain.com</a>
                                </div>
                                <div class="top-phone">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/phone-icon.svg') }}"
                                            alt="" width="14px" height="14px">
                                        +01 248 248 2481</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-bar-icon">
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/facebook-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/twitter-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/linkedin-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/instagram-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-bg-white">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="{{ route('frontend.index') }}"><img
                                        src="{{ asset('frontend/assets/image/solor-logo.svg') }}" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-5 align-items-center">
                                        <li class="nav-item">
                                            <a class="nav-link {{ Request::route()->getName() == 'frontend.index' ? 'active' : '' }}"
                                                aria-current="page" href="{{ route('frontend.index') }}">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle {{ Request::route()->getName() == 'frontend.who-we-are.about-the-company' || Request::route()->getName() == 'frontend.who-we-are.leadership' ? 'active' : '' }}"
                                                href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Who We Are
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
                                        <li class="nav-item">
                                            <a class="nav-link {{ Request::route()->getName() == 'frontend.products.index' ? 'active' : '' }}"
                                                href="{{ route('frontend.products.index') }}">Products
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Projects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ Request::route()->getName() == 'frontend.news.index' ? 'active' : '' }}"
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
                    <div class="main-canten product-text ">
                        <div class="canten-text">
                            {{-- <span><img src="{{ asset('frontend/assets/image/sub-heading-img.svg') }}"
                                    alt="Heading Image">Welcome to solor</span>
                            <h1>Lorem ipsum dolor sit amet <span class="con-bg">consectetu</span></h1>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda excepturi corrupti
                                harum
                                eveniet quae fugit. Ad tempora tempore omnis numquam! Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit.</p>

                            <div class="canten-btn">
                                <button class="services-btn">Our Services</button>
                                <button class="contactnow-btn">Contact Now</button>
                            </div> --}}

                            <a href="#" class="sub-heading text-center">
                                <img src="./assets/imges/icon/icon-sub-heading.svg" alt="" class="pe-1" />
                                WELCOME TO SOLAR
                            </a>
                            <h1 class="main-heading canten-text">
                                Energize Society By <span class="wild-energy main-heading">Wind Energy!</span>
                            </h1>
                            <p class="hero-section-paragraph text-center pt-2 pb-0">
                                Duis ultricies, tortor a accumsan fermentum, purus diam mollis
                                velit, eu bibendum ipsum erat quis leo. Vestibulum finibus, leo
                                dapibus feugiat rutrum, augue lacus rhoncus velit, vel scelerisque
                                odio est.
                            </p>
                            <div class="hero-section-buttons d-flex justify-content-center flex-wrap gap-sm-4 gap-2">
                                <a href="#" class="service-button text-nowrap">Our Services</a>
                                <a href="#" class="contact-button text-nowrap">Contact Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif (Request::route()->getName() == 'frontend.news.index')
        <div class="hero-img leadership-bg">
            <div class="container">
                <div class="top-bar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top-bar-list">
                                <div class="top-email">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/email-icon.svg') }}"
                                            alt="" width="14px" height="14px">
                                        info@domain.com</a>
                                </div>
                                <div class="top-phone">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/phone-icon.svg') }}"
                                            alt="" width="14px" height="14px">
                                        +01 248 248 2481</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-bar-icon">
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/facebook-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/twitter-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/linkedin-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/image/icon/instagram-icon.svg') }}"
                                            alt="Facebook Icon" width="14px" height="14px"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-bg-white">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="{{ route('frontend.index') }}"><img
                                        src="{{ asset('frontend/assets/image/solor-logo.svg') }}" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-5 align-items-center">
                                        <li class="nav-item">
                                            <a class="nav-link {{ Request::route()->getName() == 'frontend.index' ? 'active' : '' }}"
                                                aria-current="page" href="{{ route('frontend.index') }}">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle {{ Request::route()->getName() == 'frontend.who-we-are.about-the-company' || Request::route()->getName() == 'frontend.who-we-are.leadership' ? 'active' : '' }}"
                                                href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Who We Are
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
                                        <li class="nav-item">
                                            <a class="nav-link {{ Request::route()->getName() == 'frontend.products.index' ? 'active' : '' }}"
                                                href="{{ route('frontend.products.index') }}">Products
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Projects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ Request::route()->getName() == 'frontend.news.index' ? 'active' : '' }}"
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
                    <div class="main-canten leadership-conten">
                        <div class="canten-text">
                            <h1>News</h1>
                            <div class="leadership-list">
                                <ol>
                                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                    <li><img src="{{ asset('frontend/assets/image/svg/leadership-svg.svg') }}"
                                            alt=""></li>
                                    <li>News</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
