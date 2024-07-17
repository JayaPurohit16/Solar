<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('public/frontend/assets/image/icon/sub-heading-img.svg') }}">

    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/bootstrap.min.css') }}">

    <!-- Font Awasome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Rubik Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    <!-- Rajdhani Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Remix Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

    <!-- Swiper Slider Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <!-- Animate CSS Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/css/libs/animate.min.css" rel="stylesheet">

    <!-- Image Slider Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <!-- CSS File Link -->
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/style.css') }}">

    <!-- Responsive Link -->
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/responsive.css') }}">

</head>

<body>

    @php
        $getProjectTitle = App\Models\Project::orderBy('id', 'DESC')->get();
        $getProductTitle = App\Models\Services::orderBy('id', 'DESC')->get();
        $cms = App\Models\Cms::first();
    @endphp

    @if (
            Request::route()->getName() == 'frontend.index' ||
            Request::route()->getName() == 'frontend.who-we-are.about-the-company'
        )
            <div class="hero-img">
    @elseif(
            Request::route()->getName() == 'frontend.who-we-are.leadership' ||
            Request::route()->getName() == 'frontend.products.index' ||
            Request::route()->getName() == 'frontend.project.index' ||
            Request::route()->getName() == 'frontend.news.index' ||
            Request::route()->getName() == 'frontend.news.detail'
        )
                <div class="hero-img leadership-bg">
    @endif
            <div class="container p-sm-1 p-0">
                <div class="top-bar">
                    <div class="row">
                        <div class="col-md-6 top-bar-list">

                            <div class="top-email">
                                <a href="#" class="d-flex align-items-center gap-2"> <i aria-hidden="true"
                                        class="fas fa-envelope"></i>
                                    {{ isset($cms->support_email) ? $cms->support_email : '' }}</a>
                            </div>
                            <div class="top-phone">
                                <a href="#" class="d-flex align-items-center gap-2"><i aria-hidden="true"
                                        class="fas fa-phone-alt"></i>
                                    +{{ isset($cms->getCountryCode->phonecode) ? $cms->getCountryCode->phonecode : '' }}
                                    {{ isset($cms->customer_support) ? $cms->customer_support : '' }}</a>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="top-bar-icon">
                                <div class="bg-color-icon">
                                    <a href="{{ isset($cms->facebook_link) ? $cms->facebook_link : '' }}"
                                        target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                            viewBox="0 0 24 24" fill="#163300">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path
                                                d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="{{ isset($cms->twitter_link) ? $cms->twitter_link : '' }}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                            viewBox="0 0 24 24" fill="#163300">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path
                                                d="M22.2125 5.65605C21.4491 5.99375 20.6395 6.21555 19.8106 6.31411C20.6839 5.79132 21.3374 4.9689 21.6493 4.00005C20.8287 4.48761 19.9305 4.83077 18.9938 5.01461C18.2031 4.17106 17.098 3.69303 15.9418 3.69434C13.6326 3.69434 11.7597 5.56661 11.7597 7.87683C11.7597 8.20458 11.7973 8.52242 11.8676 8.82909C8.39047 8.65404 5.31007 6.99005 3.24678 4.45941C2.87529 5.09767 2.68005 5.82318 2.68104 6.56167C2.68104 8.01259 3.4196 9.29324 4.54149 10.043C3.87737 10.022 3.22788 9.84264 2.64718 9.51973C2.64654 9.5373 2.64654 9.55487 2.64654 9.57148C2.64654 11.5984 4.08819 13.2892 6.00199 13.6731C5.6428 13.7703 5.27232 13.8194 4.90022 13.8191C4.62997 13.8191 4.36771 13.7942 4.11279 13.7453C4.64531 15.4065 6.18886 16.6159 8.0196 16.6491C6.53813 17.8118 4.70869 18.4426 2.82543 18.4399C2.49212 18.4402 2.15909 18.4205 1.82812 18.3811C3.74004 19.6102 5.96552 20.2625 8.23842 20.2601C15.9316 20.2601 20.138 13.8875 20.138 8.36111C20.138 8.1803 20.1336 7.99886 20.1256 7.81997C20.9443 7.22845 21.651 6.49567 22.2125 5.65605Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="{{ isset($cms->linkedin_link) ? $cms->linkedin_link : '' }}"
                                        target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                            viewBox="0 0 24 24" fill="#163300">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path
                                                d="M6.94048 4.99993C6.94011 5.81424 6.44608 6.54702 5.69134 6.85273C4.9366 7.15845 4.07187 6.97605 3.5049 6.39155C2.93793 5.80704 2.78195 4.93715 3.1105 4.19207C3.43906 3.44699 4.18654 2.9755 5.00048 2.99993C6.08155 3.03238 6.94097 3.91837 6.94048 4.99993ZM7.00048 8.47993H3.00048V20.9999H7.00048V8.47993ZM13.3205 8.47993H9.34048V20.9999H13.2805V14.4299C13.2805 10.7699 18.0505 10.4299 18.0505 14.4299V20.9999H22.0005V13.0699C22.0005 6.89993 14.9405 7.12993 13.2805 10.1599L13.3205 8.47993Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="bg-color-icon">
                                    <a href="{{ isset($cms->instagram_link) ? $cms->instagram_link : '' }}"
                                        target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                            viewBox="0 0 24 24" fill="#163300">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path
                                                d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z">
                                            </path>
                                        </svg>
                                    </a>
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
                                            src="{{ asset('public/frontend/assets/image/icon/solor-logo.svg') }}"
                                            alt="Logo"></a>
                                @endif
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-4 align-items-center">
                                        <li class="nav-item home-rel">
                                            <a class="nav-link {{ Request::route()->getName() == 'frontend.index' ? 'active' : '' }}"
                                                aria-current="page" href="{{ route('frontend.index') }}">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-btn dropdown-toggle {{ Request::route()->getName() == 'frontend.who-we-are.about-the-company' || Request::route()->getName() == 'frontend.who-we-are.leadership' ? 'active' : '' }}"
                                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    @if (
                            Request::route()->getName() == 'frontend.index' ||
                            Request::route()->getName() == 'frontend.who-we-are.about-the-company'
                        )
                                            <div class="main-canten">
                                                <div class="canten-text">
                                                    <p class="canten-p fadeup-animation onview-port"><img
                                                            src="{{ asset('public/frontend/assets/image/icon/sub-heading-img.svg') }}"
                                                            alt="Heading Image">Welcome to solor</p>
                                                    <h1 data-splitting class="onview-port">Lorem ipsum dolor sit amet <span
                                                            class="con-bg">consectetu</span></h1>
                                                    <p class="fadeup-animation-text onview-port">Lorem ipsum, dolor sit amet consectetur
                                                        adipisicing elit. Assumenda excepturi corrupti
                                                        harum
                                                        eveniet quae fugit. Ad tempora tempore omnis numquam! Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipisicing elit.</p>

                                                    <div class="canten-btn fadeup-animation-text onview-port">
                                                        <button class="services-btn">Our Services</button>
                                                        <button class="contactnow-btn">Contact Now</button>
                                                    </div>
                                                </div>
                                            </div>
                    @elseif (Request::route()->getName() == 'frontend.who-we-are.leadership')
                        <div class="main-canten leadership-conten">
                            <div class="canten-text">
                                <h1 data-splitting class="onview-port">Leadership</h1>
                                <div class="leadership-list fadeup-animation-text onview-port">
                                    <ol>
                                        <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                        <li><img src="{{ asset('public/frontend/assets/image/icon/leadership-svg.svg') }}"
                                                alt=""></li>
                                        <li>Leadership</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    @elseif (Request::route()->getName() == 'frontend.products.index')
                        <div class="main-canten leadership-conten">
                            <div class="canten-text">
                                <h1 data-splitting class="onview-port">Product</h1>
                                <div class="leadership-list fadeup-animation-text onview-port">
                                    <ol>
                                        <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                        <li><img src="{{ asset('public/frontend/assets/image/icon/leadership-svg.svg') }}"
                                                alt=""></li>
                                        <li>Product</li>
                                        <li><img src="{{ asset('public/frontend/assets/image/icon/leadership-svg.svg') }}"
                                                alt=""></li>
                                        <li>{{ isset($product->title) ? $product->title : '' }}</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    @elseif (Request::route()->getName() == 'frontend.project.index')
                        <div class="main-canten leadership-conten">
                            <div class="canten-text">
                                <h1 data-splitting class="onview-port">Project</h1>
                                <div class="leadership-list fadeup-animation-text onview-port">
                                    <ol>
                                        <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                        <li>
                                            <img src="{{ asset('public/frontend/assets/image/icon/leadership-svg.svg') }}"
                                                alt="" />
                                        </li>
                                        <li>Project</li>
                                        <li>
                                            <img src="{{ asset('public/frontend/assets/image/icon/leadership-svg.svg') }}"
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
                                <h1 data-splitting class="onview-port">News</h1>
                                <div class="leadership-list fadeup-animation-text onview-port">
                                    <ol>
                                        <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                        <li><img src="{{ asset('public/frontend/assets/image/icon/leadership-svg.svg') }}"
                                                alt=""></li>
                                        <li>News</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    @elseif (Request::route()->getName() == 'frontend.news.detail')
                        <div class="main-canten leadership-conten">
                            <div class="canten-text">
                                <h1 data-splitting class="onview-port">
                                    {{ isset($newsDetail->title) ? $newsDetail->title : '' }}
                                </h1>
                                <div class="leadership-list fadeup-animation-text onview-port">
                                    <ol>
                                        <li class="bg-li">
                                            <a href="{{ route('frontend.index') }}">Home</a>
                                            {{-- {{ isset($newsDetail->date) ?
                                            \Carbon\Carbon::parse($newsDetail->date)->format('F d.Y') : '' }} --}}
                                        </li>
                                        <li>
                                            <img src="{{ asset('public/frontend/assets/image/icon/leadership-svg.svg') }}"
                                                alt="" />
                                        </li>
                                        <li>News</li>
                                        {{-- <li>
                                            <img src="{{ asset('public/frontend/assets/image/icon/leadership-svg.svg') }}"
                                                alt="" />
                                        </li>
                                        <li>In Uncategorized</li> --}}
                                    </ol>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>