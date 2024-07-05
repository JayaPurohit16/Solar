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
                                <img src="{{ asset('News/Image/' . $newsDetail->image) }}" alt="" class="img-fluid" />
                            @else
                                <img src="{{ asset('frontend/assets/imges/bg-images/news-detail-img.jpg') }}" alt=""
                                    class="img-fluid" />
                            @endif
                        </figure>
                        {{-- </a> --}}
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
                                        <ul class="text-lg-end text-start">
                                            <li>
                                                <a href="#" class="p-2 ms-2">
                                                    <img src="{{ asset('frontend/assets/imges/icon/facebook-dark-icon.svg') }}"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="p-2 ms-2">
                                                    <img src="{{ asset('frontend/assets/imges/icon/twitter-dark-icon.svg') }}"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li class="pe-0">
                                                <a href="" class="p-2 ms-2">
                                                    <img src="{{ asset('frontend/assets/imges/icon/linkedin-dark-icon.svg') }}"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-auto">
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
