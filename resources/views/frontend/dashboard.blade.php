@extends('frontend.layouts.main')
@section('main')
<section class="about-us coomen-index-padding ">
    <div class="container-lg p-sm-1 p-0">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
                <div class="bg-img">
                    <div class="left-img">
                        <img src="{{ asset('public/frontend/assets/image/about-one-img.jpg') }}" alt="About One">
                    </div>
                    <div class="right-img">
                        <img src="{{ asset('public/frontend/assets/image/about-two-img.jpg') }}" alt="About Two">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div class="about-text">
                    <p class="canten-p fadeup-animation onview-port"><img
                            src="{{ asset('public/frontend/assets/image/icon/sub-heading-img.svg') }}"
                            alt="Sub-icon">About
                        us</p>
                    <h2 data-splitting class="onview-port">About Green Energy Solar</h2>
                    <p class="fadeup-animation-text onview-port">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has
                        been
                        the industry’s standard dummy text ever since the 1500s, when an unknown printer took a
                        galley
                        of type and scrambled.</p>
                    <p class="fadeup-animation-text onview-port">Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem accusantium doloremque
                        laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                        vitae
                        dicta sunt explicabo.</p>
                    <div
                        class="about-text-list d-flex align-items-center justify-content-sm-between flex-grow-1 fadeup-animation-text onview-port">

                        <div class="about-list">
                            <span><img width="20px" height="21px"
                                    src="{{ asset('public/frontend/assets/image/icon/check-icon.svg') }}"
                                    alt="Check Icon">Solar Inverter
                                Setup</span>
                            <span><img width="20px" height="21px"
                                    src="{{ asset('public/frontend/assets/image/icon/check-icon.svg') }}"
                                    alt="Check Icon">Solar Material Financing</span>
                        </div>


                        <div class="about-list">
                            <span><img width="20px" height="21px"
                                    src="{{ asset('public/frontend/assets/image/icon/check-icon.svg') }}"
                                    alt="Check Icon">Battery Storage Solutions</span>
                            <span><img width="20px" height="21px"
                                    src="{{ asset('public/frontend/assets/image/icon/check-icon.svg') }}"
                                    alt="Check Icon">24
                                X 7 Call & Chat Support</span>
                        </div>
                    </div>
                    <button class="services-btn fadeup-animation-text onview-port">More About</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-services">
    <div class="container-lg">

        <div class="our-services-text">
            <p class="canten-p fadeup-animation text-our-center onview-port"><img
                    src="{{ asset('public/frontend/assets/image/icon/sub-heading-img.svg') }}" alt="Sub-icon">Our
                product</p>
            <h2 data-splitting class="onview-port">Best Offer For Renewable Energy</h2>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($getProducts as $product)
                    <div class="swiper-slide">
                        <div class="silder-bg-img">
                            <div class="main-img">
                                @if (isset($product->image) && file_exists(public_path('Services/Image/' . $product->image)))
                                    <img class="slider-img-sec" src="{{ asset('public/Services/Image/' . $product->image) }}"
                                        alt="Slider Image">
                                @else
                                    <img class="slider-img-sec" src="{{ asset('public/frontend/assets/image/slider-img.jpg') }}"
                                        alt="Slider Image">
                                @endif
                                <!-- Icon with Link -->
                                <!-- <a href="#" class="bg-color-slider">
                                                                    <img src="{{ asset('public/frontend/assets/image/icon/slider-svg.svg') }}"
                                                                        alt="Icon">
                                                                </a> -->

                                <!-- Icon Without Link -->
                                <div class="bg-color-slider">
                                    <img src="{{ asset('public/frontend/assets/image/icon/slider-svg.svg') }}" alt="Icon">
                                </div>

                                <div class="slider-card">
                                    <h4>{{ isset($product->title) ? $product->title : '' }}</h4>
                                    <p>{!! isset($product->description) ? substr($product->description, 0, 60) : '' !!}...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="swiper-slide">
                    <div class="silder-bg-img">
                        <div class="main-img">
                            <img src="{{ asset('frontend/assets/image/slider-1-img.jpg') }}" alt="Slider Image">
                            <a href="#" class="bg-color-slider">
                                <img width="30px" height="30px"
                                    src="{{ asset('frontend/assets/image/svg/slider-svg-1.svg') }}" alt="Icon">
                            </a>

                            <div class="slider-card">
                                <h4>Hybrid Energy</h4>
                                <p>Lorem ipsum dolordfhyrt sit amet. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="silder-bg-img">
                        <div class="main-img">
                            <img src="{{ asset('frontend/assets/image/slider-2-img.jpg') }}" alt="Slider Image">
                            <a href="#" class="bg-color-slider">
                                <img width="30px" height="30px"
                                    src="{{ asset('frontend/assets/image/svg/slider-svg-2.svg') }}" alt="Icon">
                            </a>

                            <div class="slider-card">
                                <h4>Solar PV Systems </h4>
                                <p>Lorem ipsum dolordfhyrt sit amet. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="silder-bg-img">
                        <div class="main-img">
                            <img src="{{ asset('frontend/assets/image/slider-3-img.jpg') }}" alt="Slider Image">
                            <a href="#" class="bg-color-slider">
                                <img width="30px" height="30px"
                                    src="{{ asset('frontend/assets/image/svg/slider-svg-3.svg') }}" alt="Icon">
                            </a>
                            <div class="slider-card">
                                <h4>Solar Solutions</h4>
                                <p>Lorem ipsum dolordfhyrt sit amet. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="silder-bg-img">
                        <div class="main-img">
                            <img src="{{ asset('frontend/assets/image/slider-4-img.jpg') }}" alt="Slider Image">
                            <a href="#" class="bg-color-slider">
                                <img width="30px" height="30px"
                                    src="{{ asset('frontend/assets/image/svg/slider-svg-4.svg') }}" alt="Icon">
                            </a>
                            <div class="slider-card">
                                <h4>Energy Saving Devices</h4>
                                <p>Lorem ipsum dolordfhyrt sit amet. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="silder-bg-img">
                        <div class="main-img">
                            <img src="{{ asset('frontend/assets/image/slider-1-img.jpg') }}" alt="Slider Image">
                            <a href="#" class="bg-color-slider">
                                <img width="30px" height="30px"
                                    src="{{ asset('frontend/assets/image/svg/slider-svg-1.svg') }}" alt="Icon">
                            </a>
                            <div class="slider-card">
                                <h4>Hybrid Energy</h4>
                                <p>Lorem ipsum dolordfhyrt sit amet. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="silder-bg-img">
                        <div class="main-img">
                            <img src="{{ asset('frontend/assets/image/slider-2-img.jpg') }}" alt="Slider Image">
                            <a href="#" class="bg-color-slider">
                                <img width="30px" height="30px"
                                    src="{{ asset('frontend/assets/image/svg/slider-svg-2.svg') }}" alt="Icon">
                            </a>
                            <div class="slider-card">
                                <h4>Solar PV Systems </h4>
                                <p>Lorem ipsum dolordfhyrt sit amet. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="silder-bg-img">
                        <div class="main-img">
                            <img src="{{ asset('frontend/assets/image/slider-3-img.jpg') }}" alt="Slider Image">
                            <a href="#" class="bg-color-slider">
                                <img width="30px" height="30px"
                                    src="{{ asset('frontend/assets/image/svg/slider-svg-3.svg') }}" alt="Icon">
                            </a>
                            <div class="slider-card">
                                <h4>Solar Solutions</h4>
                                <p>Lorem ipsum dolordfhyrt sit amet. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="silder-bg-img">
                        <div class="main-img">
                            <img src="{{ asset('frontend/assets/image/slider-4-img.jpg') }}" alt="Slider Image">
                            <a href="#" class="bg-color-slider">
                                <img width="30px" height="30px"
                                    src="{{ asset('frontend/assets/image/svg/slider-svg-4.svg') }}" alt="Icon">
                            </a>
                            <div class="slider-card">
                                <h4>Energy Saving Devices</h4>
                                <p>Lorem ipsum dolordfhyrt sit amet. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="our-latest coomen-index-padding">
    <div class="container">
        <div class="our-latest-text">
            <p class="canten-p fadeup-animation text-our-center onview-port"><img
                    src="{{ asset('public/frontend/assets/image/icon/sub-heading-img.svg') }}" alt="Sub Image">OUR
                LATEST
                PROCESS</p>
            <h2 data-splitting class="onview-port">Lorem ipsum dolor</h2>
        </div>
        <div class="our-latest-card fadeup-animation-text onview-port">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card-item">
                        <div class="card-bg-color">
                            <img src="{{ asset('public/frontend/assets/image/icon/our-latest-img.svg') }}" alt="">
                            <div class="card-bg-raund">
                                <span>01</span>
                            </div>
                        </div>
                        <h4>Project Planning</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 fadeup-animation-card onview-port">
                    <div class="card-item card-item-one">
                        <div class="card-bg-color">
                            <img src="{{ asset('public/frontend/assets/image/icon/our-latest-1-img.svg') }}" alt="">
                            <div class="card-bg-raund">
                                <span>02</span>
                            </div>
                        </div>
                        <h4>Research & Analysis</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card-item card-item-two">
                        <div class="card-bg-color">
                            <img src="{{ asset('public/frontend/assets/image/icon/our-latest-2-img.svg') }}" alt="">
                            <div class="card-bg-raund">
                                <span>03</span>
                            </div>
                        </div>
                        <h4>Solar Installation</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video-bg coomen-index-padding">
    <div class="container">
        <div class="video-men" style="position: relative;">
            <div class="video-bgimg">
                <img src="{{ asset('public/frontend/assets/image/video-bg-img.jpg') }}" alt="">
                <button type="button" class="btn video-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img src="{{ asset('public/frontend/assets/image/icon/video-svg.svg') }}" alt="Video Svg">
                </button>

                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe src="https://www.youtube.com/embed/ZRX7R6sjIs0?si=9ObySwHQhEnpknXu"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <!-- <div class="modal-footer">
                                                                                                                                                                                                                                                                                                                                                                            <button type="button" class="btn btn-secondary"
                                                                                                                                                                                                                                                                                                                                                                                data-bs-dismiss="modal">Close</button>
                                                                                                                                                                                                                                                                                                                                                                            <button type="button" class="btn btn-primary">Understood</button>
                                                                                                                                                                                                                                                                                                                                                                        </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>





<section class="energy-sec coomen-index-padding">
    <div class="container p-sm-1 p-0">
        <div class="energy-flex">
            <div class="row">
                <div class="col-md-6">
                    <div class="energy-flex-text">
                        <p class="canten-p fadeup-animation our-latest-text onview-port"><img
                                src="{{ asset('public/frontend/assets/image/icon/sub-heading-img.svg') }}" alt="">ENERGY
                            PROGRESS</p>
                        <h3 data-splitting class="onview-port">Best Solution For Your Solar
                            Energy</h3>
                        <p class="fadeup-animation-text onview-port">Lorem ipsum, dolor sit amet consectetur
                            adipisicing
                            elit. Cupiditate eligendi esse iste
                            aliquam corporis mollitia.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="energy-right">
                        <div class="skill-energy">
                            <h5>Solar Panels</h5>
                            <span>95%</span>

                        </div>
                        <div class="skil-bar">
                            <div class="skil-track" style="width: 95%;"></div>
                        </div>
                    </div>
                    <div class="energy-right">
                        <div class="skill-energy">
                            <h5>Hybrid Energy</h5>
                            <span>80%</span>

                        </div>
                        <div class="skil-bar">
                            <div class="skil-track" style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="energy-right">
                        <div class="skill-energy">
                            <h5>Marketing</h5>
                            <span>70%</span>

                        </div>
                        <div class="skil-bar">
                            <div class="skil-track" style="width: 70%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="have-questions coomen-index-padding">
    <div class="container">
        <div class="have-questions-bg">
            <div class="have-questions-flex">
                <div class="have-questions-img">
                    <img src="{{ asset('public/frontend/assets/image/have-questions-img.jpg') }}" alt=" Image">
                </div>
                <div class="have-questions-btn">
                    <div class="have-questions-button-bg">
                        <img src="{{ asset('public/frontend/assets/image/icon/have-svg.svg') }}" alt="">
                    </div>
                </div>
                <div class="have-questions-right-text">
                    <h2 data-splitting class="onview-port">Have Questions? <p>Call Us</p> 800-001-658</h2>
                    <p class="fadeup-animation-text onview-port">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Nemo, nihil? In a quia iusto ex!
                        Cupiditate officia architecto ex deserunt.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-choose-sec">
    <div class="container p-sm-1 p-0">

        <div class="why-choose-sec-text">
            <p class="canten-p fadeup-animation text-our-center onview-port"><img
                    src="{{ asset('public/frontend/assets/image/icon/sub-heading-img.svg') }}" alt="">WHY
                CHOOSE
                US</p>
            <h2 data-splitting class="onview-port">Providing Solar Energy Solutions</h2>
        </div>
        <div class="why-choose-sec-card fadeup-animation-card onview-port">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="why-card-mb">
                        <div class="why-choose-card">
                            <img width="60px" height="60px"
                                src="{{ asset('public/frontend/assets/image/icon/choose-svg.svg') }}" alt="">
                            <h5> Efficiency & Power</h5>
                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.
                            </p>
                            <figure class="image-hover"><img loading="lazy" decoding="async" width="600" height="554"
                                    src="{{ asset('public/frontend/assets/image/img-hover.jpg') }}"
                                    class="attachment- size-" />
                            </figure>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6">
                    <div class="why-card-mb">
                        <div class="why-choose-card">
                            <img width="60px" height="60px"
                                src="{{ asset('public/frontend/assets/image/icon/choose-svg-1.svg') }}" alt="">
                            <h5>Trust & Warranty</h5>
                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.
                            </p>
                            <figure class="image-hover"><img loading="lazy" decoding="async" width="600" height="554"
                                    src="{{ asset('public/frontend/assets/image/hover-img1.jpg') }}"
                                    class="attachment- size-" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="why-card-mb">
                        <div class="why-choose-card">
                            <img width="60px" height="60px"
                                src="{{ asset('public/frontend/assets/image/icon/choose-svg-2.svg') }}" alt="">
                            <h5>High Quality Work</h5>
                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.
                            </p>
                            <figure class="image-hover"><img loading="lazy" decoding="async" width="600" height="554"
                                    src="{{ asset('public/frontend/assets/image/hover-img2.jpg') }}"
                                    class="attachment- size-" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="why-card-mb">
                        <div class="why-choose-card">
                            <img width="60px" height="60px"
                                src="{{ asset('public/frontend/assets/image/icon/choose-svg-3.svg') }}" alt="">
                            <h5>24*7 Support</h5>
                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.
                            </p>
                            <figure class="image-hover"><img loading="lazy" decoding="async" width="600" height="554"
                                    src="{{ asset('public/frontend/assets/image/hover-img3.jpg') }}"
                                    class="attachment- size-" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-sec">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="section-sec-card">
                    <div class="card-img">
                        <img src="{{ asset('public/frontend/assets/image/icon/section-sec.svg') }}" alt="">
                    </div>
                    <div class="card-text">
                        <span id="count1"></span><span>+</span>
                        <p>Project Done</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 ">
                <div class="section-sec-card">
                    <div class="card-img">
                        <img src="{{ asset('public/frontend/assets/image/icon/section-sec-1.svg') }}" alt="">
                    </div>
                    <div class="card-text">
                        <span id="count2"></span><span>+</span>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="section-sec-card">
                    <div class="card-img">
                        <img src="{{ asset('public/frontend/assets/image/icon/section-sec-2.svg') }}" alt="">
                    </div>
                    <div class="card-text">
                        <span id="count3"></span><span>+</span>
                        <p>Award Winning</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="section-sec-card">
                    <div class="card-img">
                        <img src="{{ asset('public/frontend/assets/image/icon/section-sec.svg') }}" alt="">
                    </div>
                    <div class="card-text">
                        <span id="count4"></span><span>+</span>
                        <p>Rating Customer</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="calculator-sec coomen-index-padding fadeup-animation-card onview-port">
    <div class="container">
        <div class="calculator-sec-bg">
            <div class="row">
                <div class="col-lg-5">
                    <div class="calculator-sec-text">
                        <p class="canten-p fadeup-animation onview-port"><img
                                src="{{ asset('public/frontend/assets/image/icon/sub-heading-img.svg') }}" alt="">SOLAR
                            CALCULATOR</p>
                        <h2 data-splitting class="onview-port">Your Solar Savings Calculator</h2>
                    </div>
                </div>
                <div class="col-lg-7 p-0">
                    <div class="calculator-sec-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="select-form">
                                    <select name="category">
                                        <option>—Please choose an option—</option>
                                        <option>Residential</option>
                                        <option>Commercial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-form">
                                    <input type="text" placeholder="Full Nume">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-form">
                                    <input type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-form">
                                    <input type="number" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-form">
                                    <input type="text" placeholder="our Average Monthly Bill?">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-form">
                                    <input type="text" placeholder="Required Solar Plant Capacity (in kW)">
                                </div>
                            </div>
                        </div>
                        <button class="services-btn">Calculate</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="articl-sec coomen-index-padding">
    <div class="container p-sm-1 p-0">
        <div class="articl-sec-text">
            <span class="canten-p fadeup-animation text-our-center onview-port"><img
                    src="{{ asset('public/frontend/assets/image/icon/sub-heading-img.svg') }}" alt="">RECENT
                ARTICLES</span>
            <h2 data-splitting class="onview-port">Our Latest News</h2>
        </div>
        <div class="row fadeup-animation-card onview-port">
            @foreach ($getNews as $news)
                <div class="col-lg-4">
                    <div class="articl-sec-card">
                        @if (isset($news->image) && file_exists(public_path('News/Image/' . $news->image)))
                            <img class="articl-bg-img" src="{{ asset('public/News/Image/' . $news->image) }}"
                                alt="Articl Image">
                        @else
                            <img class="articl-bg-img" src="{{ asset('public/frontend/assets/image/articl-img.jpg') }}"
                                alt="Articl Image">
                        @endif
                        <div class="articl-sec-card-bg">
                            <h2>{{ isset($news->title) ? $news->title : '' }}</h2>
                            <div class="articl-sec-flex">
                                <span><img src="{{ asset('public/frontend/assets/image/icon/calendar-icon.svg') }}"
                                        alt="">{{ isset($news->date) ? \Carbon\Carbon::parse($news->date)->format('F d, Y') : '' }}</span>
                                {{-- <span><img src="{{ asset('frontend/assets/image/icon/price-tag-icon.svg') }}"
                                        alt="">Uncategorized</span> --}}
                            </div>
                            <a href="{{ route('frontend.news.detail', base64_encode($news->id)) }}"><button
                                    class="services-btn">Read More</button></a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-lg-4">
                <div class="articl-sec-card">
                    <img src="{{ asset('frontend/assets/image/articl-1-img.jpg') }}" alt="Articl Image">
                    <div class="articl-sec-card-bg">
                        <h2>Solar Solutions for a Sustainable Tomorrow</h2>
                        <div class="articl-sec-flex">
                            <span><img src="{{ asset('frontend/assets/image/icon/calendar-icon.svg') }}" alt="">March
                                19, 2024</span>
                            <span><img src="{{ asset('frontend/assets/image/icon/price-tag-icon.svg') }}"
                                    alt="">Uncategorized</span>
                        </div>
                        <button class="services-btn">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="articl-sec-card">
                    <img src="{{ asset('frontend/assets/image/articl-2-img.jpg') }}" alt="Articl Image">
                    <div class="articl-sec-card-bg">
                        <h2>Advancements and Breakthroughs in Renewable Power</h2>
                        <div class="articl-sec-flex">
                            <span><img src="{{ asset('frontend/assets/image/icon/calendar-icon.svg') }}" alt="">March
                                19, 2024</span>
                            <span><img src="{{ asset('frontend/assets/image/icon/price-tag-icon.svg') }}"
                                    alt="">Uncategorized</span>
                        </div>
                        <button class="services-btn">Read More</button>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection

@section('js')
<!-- Counter Number Js -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        function counter(id, start, end, duration) {
            let obj = document.getElementById(id),
                current = start,
                range = end - start,
                increment = end > start ? 1 : -1,
                step = Math.abs(Math.floor(duration / range)),
                timer = setInterval(() => {
                    current += increment;
                    obj.textContent = current;
                    if (current == end) {
                        clearInterval(timer);
                    }
                }, step);
        }
        counter("count1", 0, 1000, 3000);
        counter("count2", 100, 1200, 2500);
        counter("count3", 0, 850, 3000);
        counter("count4", 0, 1100, 3000);
    });
</script>
@endsection