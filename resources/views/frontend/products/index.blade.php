@extends('frontend.layouts.main')
@section('main')
    <section class="news-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="news-left-sec">
                        <div class="news-left-sec-bg">
                            <ul>
                                @foreach ($productTitle as $index => $title)
                                    <li><a href="{{ route('frontend.products.index', base64_encode($title->id)) }}"
                                            class="{{ $index < count($productTitle) - 1 ? 'news-border-bottom' : '' }}"><img
                                                src="{{ asset('frontend/assets/image/sub-heading-img.svg') }}" alt="">
                                            {{ isset($title->title) ? $title->title : '' }}
                                        </a>
                                    </li>
                                @endforeach
                                {{-- <li><a href="#" class="news-border-bottom"><img
                                            src="{{ asset('frontend/assets/image/sub-heading-img.svg') }}" alt="">
                                        Hybrid Energy</a></li>
                                <li><a href="#" class="news-border-bottom"><img
                                            src="{{ asset('frontend/assets/image/sub-heading-img.svg') }}" alt="">
                                        Renewable Energy</a>
                                </li>
                                <li><a href="#" class="news-border-bottom"><img
                                            src="{{ asset('frontend/assets/image/sub-heading-img.svg') }}" alt="">
                                        Solar Maintenance​</a>
                                </li>
                                <li><a href="#" class="news-border-bottom"><img
                                            src="{{ asset('frontend/assets/image/sub-heading-img.svg') }}" alt="">
                                        Solar PV Systems</a>
                                </li>
                                <li><a href="#"><img src="{{ asset('frontend/assets/image/sub-heading-img.svg') }}"
                                            alt=""> Solar
                                        Solutions</a>
                                </li> --}}
                            </ul>
                        </div>

                        <section class="have-questions">
                            <div class="have-questions-bg news-bg">
                                <div class="have-questions-flex news-left-flex">
                                    <div class="have-questions-img news-left-img">
                                        <img src="{{ asset('frontend/assets/image/news-img-card.jpg') }}" alt=" Image">
                                    </div>
                                    <div class="have-questions-btn">
                                        <div class="have-questions-button-bg new-bg-img">
                                            <img src="{{ asset('frontend/assets/image/svg/have-svg.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="have-questions-right-text news-left-bg">
                                        <p>Get Professional Help</p>
                                        <h2>(+0) 123 456 789</h2>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="news-right-sec">
                        <div class="news-right-text">
                            @if (isset($product->image) && file_exists(public_path('Services/Image/' . $product->image)))
                                <img class="product-section-img" src="{{ asset('Services/Image/' . $product->image) }}"
                                    alt="Image">
                            @else
                                <img class="product-section-img"
                                    src="{{ asset('frontend/assets/image/planning-sec-img.jpg') }}" alt="Image">
                            @endif
                            <p>{!! isset($product->description) ? $product->description : '' !!}</p>
                            <h2>Why us!</h2>
                            <p>{!! isset($product->why_us_description) ? $product->why_us_description : '' !!}</p>

                            <section class="video-bg product-video">
                                <div class="video-men" style="position: relative;">
                                    <div class="video-bgimg">
                                        <img src="{{ asset('frontend/assets/image/video-bg-img.jpg') }}" alt="">
                                        <button type="button" class="btn video-btn" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            <img src="{{ asset('frontend/assets/image/svg/video-svg.svg') }}"
                                                alt="Video Svg">
                                        </button>
                                    </div>
                                </div>
                            </section>



                            <h2>Benefits of Solar Energy</h2>

                            <div class="why-choose-sec-card">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="why-choose-card news-right-card">
                                            <img src="{{ asset('frontend/assets/image/svg/news-right-svg.svg') }}"
                                                alt="">
                                            <h5>Renewable Energy</h5>
                                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed
                                                mauris
                                                a nisl.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="why-choose-card news-right-card">
                                            <img src="{{ asset('frontend/assets/image/svg/news-card1-svg.svg') }}"
                                                alt="">
                                            <h5>Energy Saving</h5>
                                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed
                                                mauris
                                                a nisl.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="why-choose-card news-right-card">
                                            <img src="{{ asset('frontend/assets/image/svg/choose-svg-2.svg') }}"
                                                alt="">
                                            <h5>Easy Installation</h5>
                                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed
                                                mauris
                                                a nisl.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="why-choose-card news-right-card">
                                            <img src="{{ asset('frontend/assets/image/svg/choose-svg-3.svg') }}"
                                                alt="">
                                            <h5>Energy Solution</h5>
                                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed
                                                mauris
                                                a nisl.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="why-choose-card news-right-card">
                                            <img src="{{ asset('frontend/assets/image/svg/news-card2-svg.svg') }}"
                                                alt="">
                                            <h5>Technical Support</h5>
                                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed
                                                mauris
                                                a nisl.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="why-choose-card news-right-card">
                                            <img src="{{ asset('frontend/assets/image/svg/news-card3-svg.svg') }}"
                                                alt="">
                                            <h5>Solar Maintenance</h5>
                                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed
                                                mauris
                                                a nisl.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="news-img-sec">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="new-left-img">
                                            <img src="{{ asset('frontend/assets/image/planning-sec-img.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="news-img-sec-text planning-heading">
                                            <h2> Planning & Strategy</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been standard dummy text ever since the 1500s. </p>
                                            <ul>
                                                <li><img class="news-li-icon"
                                                        src="{{ asset('frontend/assets/image/icon/check-icon.svg') }}"
                                                        alt="">Research beyond
                                                    the
                                                    business plan</li>
                                                <li><img class="news-li-icon"
                                                        src="{{ asset('frontend/assets/image/icon/check-icon.svg') }}"
                                                        alt="">Marketing options
                                                    and
                                                    rates</li>
                                                <li><img class="news-li-icon"
                                                        src="{{ asset('frontend/assets/image/icon/check-icon.svg') }}"
                                                        alt="">The ability to
                                                    turnaround consulting</li>
                                                <li><img class="news-li-icon"
                                                        src="{{ asset('frontend/assets/image/icon/check-icon.svg') }}"
                                                        alt="">It was
                                                    popularised in
                                                    the 1960s with the.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="frequently-sec">
                                <div class="frequently-heading">
                                    <h3>Frequently Asked Questions</h3>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            {{-- @foreach ($getQuestion as $question)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{ isset($question->questions) ? $question->questions : '' }}
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ad,
                                            explicabo vitae beatae impedit dignissimos repudiandae autem est iusto, deserunt
                                            ducimus harum quidem odit. Unde debitis perspiciatis magni quos quibusdam.
                                        </div>
                                    </div>
                                </div>
                            @endforeach --}}
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ad,
                                        explicabo vitae beatae impedit dignissimos repudiandae autem est iusto, deserunt
                                        ducimus harum quidem odit. Unde debitis perspiciatis magni quos quibusdam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas placeat ullam
                                        itaque repudiandae repellendus quam a similique illum cumque explicabo provident
                                        magni, maiores sit quidem quae fugiat, ipsam iure id.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nobis, itaque
                                        inventore amet eum accusantium eos libero cum exercitationem? Voluptatem aut
                                        dignissimos qui placeat ea, natus earum cum eveniet quibusdam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </button>
                                </h2>
                                <div id="collapseFor" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, aperiam. Animi
                                        repellendus ratione debitis at dignissimos voluptatibus. Ducimus odit itaque quo
                                        maiores officia odio facere fugiat, accusantium sapiente beatae saepe.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    @if (isset($product->why_us_video_link) && !empty($product->why_us_video_link))
                        <iframe src="{{ $product->why_us_video_link }}" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    @else
                        <p>No video available</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
