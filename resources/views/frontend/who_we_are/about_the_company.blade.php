@extends('frontend.layouts.main')
@section('main')
    <section class="about-us coomen-index-padding ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bg-img introduction-bg">
                        <div class="left-img">
                            <img src="{{ asset('public/frontend/assets/image/about-one-img.jpg') }}" alt="About One">
                        </div>
                        <div class="right-img introduction-img">
                            <img src="{{ asset('public/frontend/assets/image/slider-4-img.jpg') }}" alt="About Two">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <span><img src="{{ asset('public/frontend/assets/image/sub-heading-img.svg') }}"
                                alt="Sub-icon">Introduction</span>
                        <h2>Lorem ipsum consectetur</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been
                            the industry’s standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dignissimos cum mollitia
                            recusandae,
                            reprehenderit ipsum omnis molestiae culpa iure explicabo.</p>
                        <div class="about-text-list">

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
                                        src="{{ asset('public/frontend/assets/image/icon/check-icon.svg') }}" alt="Check Icon">24
                                    X 7 Call & Chat Support</span>
                            </div>
                        </div>
                        <div class="about-btn">
                            <button>More About</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-us coomen-index-padding story-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-text story-text">
                        <span><img src="{{ asset('public/frontend/assets/image/sub-heading-img.svg') }}" alt="Sub-icon">Our
                            Story</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry’s standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled.</p>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dignissimos cum mollitia
                            recusandae, reprehenderit ipsum omnis molestiae culpa iure explicabo Lorem ipsum dolor sit
                            amet
                            consectetur adipisicing elit. Sed dignissimos cum mollitia recusandae, reprehenderit ipsum
                            omnis
                            molestiae culpa iure explicabo.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-img story-bg">
                        <div class="story-bg-img">
                            <img src="{{ asset('public/frontend/assets/image/slider-img.jpg') }}" alt="About One">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-vision-sec coomen-index-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="our-vision-flex">
                        <img class="our-vision-img" src="{{ asset('public/frontend/assets/image/have-questions-img.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-text story-text">
                        <span><img src="{{ asset('public/frontend/assets/image/sub-heading-img.svg') }}" alt="Sub-icon">Our
                            Vision</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry’s standard dummy text ever since the 1500s, when an unknown printer took a
                            galley.
                        </p>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dignissimos cum mollitia
                            recusandae, reprehenderit ipsum omnis molestiae culpa iure explicabo Lorem ipsum dolor sit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-sec">
        <div class="container">
            <div class="why-choose-sec-text">
                <span><img src="{{ asset('public/frontend/assets/image/sub-heading-img.svg') }}" alt="">Mission</span>
                <h2>Lorem ipsum dolor sit amet.</h2>
            </div>
            <div class="why-choose-sec-card">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="why-choose-card">
                            <img width="60px" height="60px"
                                src="{{ asset('public/frontend/assets/image/svg/choose-svg.svg') }}" alt="">
                            <h5>Lorem ipsum dolor.</h5>
                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="why-choose-card">
                            <img width="60px" height="60px"
                                src="{{ asset('public/frontend/assets/image/svg/choose-svg-1.svg') }}" alt="">
                            <h5>Lorem eget ultricies</h5>
                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="why-choose-card">
                            <img width="60px" height="60px"
                                src="{{ asset('public/frontend/assets/image/svg/choose-svg-2.svg') }}" alt="">
                            <h5>Lorem Quality Work</h5>
                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="why-choose-card">
                            <img width="60px" height="60px"
                                src="{{ asset('public/frontend/assets/image/svg/choose-svg-3.svg') }}" alt="">
                            <h5>Lorem ipsum 24*7 </h5>
                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="objective-sec coomen-index-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="objective-sec-img">
                        <img src="{{ asset('public/frontend/assets/image/articl-1-img.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="objective-sec-text">
                        <span><img src="{{ asset('public/frontend/assets/image/sub-heading-img.svg') }}"
                                alt="">objective</span>
                        <h2>Lorem ipsum dolor sit Lorem, ipsum.</h2>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            <li>perspiciatis delectus animi commodi reiciendis molestiae ipsa odio.</li>
                            <li> rerum facere vero alias blanditiis excepturi saepe, voluptates</li>
                            <li>Laudantium quas consequuntur quod officiis architecto.</li>
                            <li>perspiciatis delectus animi commodi reiciendis molestiae ipsa odio.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
