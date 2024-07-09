@extends('frontend.layouts.main')
@section('main')
<section class="news-details">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="news-detail-img">
                    {{-- <a href="#"> --}}
                        <figure class="image-anime">
                            @if (isset($newsDetail->image) && file_exists(public_path('News/Image/' . $newsDetail->image)))
                                <img src="{{ asset('public/News/Image/' . $newsDetail->image) }}" alt=""
                                    class="img-fluid" />
                            @else
                                <img src="{{ asset('public/frontend/assets/image/news-detail-img.jpg') }}" alt="" />
                            @endif
                        </figure>
                        {{--
                    </a> --}}
                </div>
                <div class="col-md-12 p-0">
                    <div class="comment-section m-auto">
                        <div class="post-comment">
                            <p class="mb-4">{!! isset($newsDetail->description) ? $newsDetail->description : '' !!}</p>
                            {{-- <p class="mb-4">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry’s
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a
                                type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining
                                essentially unchanged. It was popularised in the 1960s with
                                the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software
                                like Aldus PageMaker including versions of Lorem Ipsum.
                            </p> --}}

                            <h2 class="comment-heading">Solar Energy is Powerfull</h2>

                            <p class="mb-4">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry’s
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a
                                type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining
                                essentially unchanged. It was popularised in the 1960s with
                                the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software
                                like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>

                            <div class="card news-quote mb-3">
                                <h1>
                                    “Success is the result of perfection, hard work, learning
                                    from failure, loyalty, and persistence”
                                </h1>
                            </div>

                            <p class="mb-4">
                                but also the leap into electronic typesetting, remaining
                                essentially unchanged. It was popularised in the 1960s with
                                the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software
                                like Aldus PageMaker including.
                            </p>

                            <h2 class="comment-heading">
                                How Solar Energy is the Solution
                            </h2>

                            <ul>
                                <li class="fw-bold">
                                    Satisfaction Value For Money Solution
                                </li>
                                <li class="fw-bold">Reliability and Performance</li>
                                <li class="fw-bold">
                                    The world as it is heavily dependent
                                </li>
                            </ul>

                            <p class="mb-4">
                                It has survived not only five centuries, but also the leap
                                into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release
                                of Letraset sheets containing Lorem Ipsum passages, and more
                                recently with desktop publishing software like Aldus
                                PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 p-0"></div>
                            <div class="col-lg-4 col-12 p-0">
                                <div class="comment-section-social-icons pe-0">
                                    <ul
                                        class="d-flex align-items-center justify-content-lg-end justify-content-start gap-2">
                                        <li>
                                            <a href="{{ isset($cms->facebook_link) ? $cms->facebook_link : '' }}"
                                                target="_blank"
                                                class="d-flex align-items-center justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="#163300">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path
                                                        d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ isset($cms->twitter_link) ? $cms->twitter_link : '' }}"
                                                target="_blank"
                                                class="d-flex align-items-center justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="#163300">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path
                                                        d="M22.2125 5.65605C21.4491 5.99375 20.6395 6.21555 19.8106 6.31411C20.6839 5.79132 21.3374 4.9689 21.6493 4.00005C20.8287 4.48761 19.9305 4.83077 18.9938 5.01461C18.2031 4.17106 17.098 3.69303 15.9418 3.69434C13.6326 3.69434 11.7597 5.56661 11.7597 7.87683C11.7597 8.20458 11.7973 8.52242 11.8676 8.82909C8.39047 8.65404 5.31007 6.99005 3.24678 4.45941C2.87529 5.09767 2.68005 5.82318 2.68104 6.56167C2.68104 8.01259 3.4196 9.29324 4.54149 10.043C3.87737 10.022 3.22788 9.84264 2.64718 9.51973C2.64654 9.5373 2.64654 9.55487 2.64654 9.57148C2.64654 11.5984 4.08819 13.2892 6.00199 13.6731C5.6428 13.7703 5.27232 13.8194 4.90022 13.8191C4.62997 13.8191 4.36771 13.7942 4.11279 13.7453C4.64531 15.4065 6.18886 16.6159 8.0196 16.6491C6.53813 17.8118 4.70869 18.4426 2.82543 18.4399C2.49212 18.4402 2.15909 18.4205 1.82812 18.3811C3.74004 19.6102 5.96552 20.2625 8.23842 20.2601C15.9316 20.2601 20.138 13.8875 20.138 8.36111C20.138 8.1803 20.1336 7.99886 20.1256 7.81997C20.9443 7.22845 21.651 6.49567 22.2125 5.65605Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="pe-0">
                                            <a href="{{ isset($cms->linkedin_link) ? $cms->linkedin_link : '' }}"
                                                target="_blank"
                                                class="d-flex align-items-center justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="#163300">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path
                                                        d="M6.94048 4.99993C6.94011 5.81424 6.44608 6.54702 5.69134 6.85273C4.9366 7.15845 4.07187 6.97605 3.5049 6.39155C2.93793 5.80704 2.78195 4.93715 3.1105 4.19207C3.43906 3.44699 4.18654 2.9755 5.00048 2.99993C6.08155 3.03238 6.94097 3.91837 6.94048 4.99993ZM7.00048 8.47993H3.00048V20.9999H7.00048V8.47993ZM13.3205 8.47993H9.34048V20.9999H13.2805V14.4299C13.2805 10.7699 18.0505 10.4299 18.0505 14.4299V20.9999H22.0005V13.0699C22.0005 6.89993 14.9405 7.12993 13.2805 10.1599L13.3205 8.47993Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-section m-auto">
                        <div class="comment-form">
                            <form class="row g-3">
                                <div class="col-12">
                                    <h2 class="comment-heading">Leave a Reply</h2>
                                    <p>
                                        Your email address will not be published. Required
                                        fields are marked *
                                    </p>
                                </div>
                                <div class="col-12">
                                    <label for="comment" class="form-label">Comment *</label>
                                    <textarea class="form-control" name="comment" id="comment" rows="10"></textarea>
                                </div>

                                <div class="col-md-4 input-container">
                                    <label for="name" class="form-label">Name *</label>
                                    <input id="name" type="text" class="form-control input-spacing" />
                                </div>
                                <div class="col-md-4 input-container">
                                    <label for="email" class="form-label">Email *</label>
                                    <input id="email" type="text" class="form-control input-spacing" />
                                </div>
                                <div class="col-md-4 input-container">
                                    <label for="website" class="form-label">Website</label>
                                    <input id="website" type="text" class="form-control" />
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck" />
                                        <label class="form-check-label" for="gridCheck">
                                            Save my name, email, and website in this browser for
                                            the next time I comment.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a type="button" class="services-btn contact-btn fw-bold">
                                        Post Comment
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection