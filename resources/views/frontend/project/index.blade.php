@extends('frontend.layouts.main')
@section('main')
    <section class="news-details">
        <div class="container-xl">
            <div class="row g-4">
                <div class="col-lg-4 px-lg-4 px-0">
                    <div class="about-the-page">
                        <h2>About the project</h2>
                        <ul class="about-page-item-list">
                            @if (isset($project->project_date) && $project->project_date)
                                <li class="d-flex align-items-center gap-3 py-4">
                                    <div class="about-page-img d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('frontend/assets/imges/icon/project-date-icon.svg') }}"
                                            alt="" />
                                    </div>
                                    <div class="about-page-data">
                                        <h6>Project Date</h6>
                                        <p>{{ isset($project->project_date) ? \Carbon\Carbon::parse($project->project_date)->format('d F. Y') : '-' }}
                                        </p>
                                    </div>
                                </li>
                            @endif
                            @if (isset($project->energy_generation) && $project->energy_generation)
                                <li class="d-flex align-items-center gap-3 py-4">
                                    <div class="about-page-img d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('frontend/assets/imges/icon/energy-generation.svg') }}"
                                            alt="" />
                                    </div>
                                    <div class="about-page-data">
                                        <h6>Energy Generation:</h6>
                                        <p>{{ isset($project->energy_generation) ? $project->energy_generation : '' }}</p>
                                    </div>
                                </li>
                            @endif
                            @if (isset($project->category) && $project->category)
                                <li class="d-flex align-items-center gap-3 py-4">
                                    <div class="about-page-img d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('frontend/assets/imges/icon/category.svg') }}" alt="" />
                                    </div>
                                    <div class="about-page-data">
                                        <h6>Category:</h6>
                                        <p>{{ isset($project->getCategory->title) ? $project->getCategory->title : '' }}</p>
                                    </div>
                                </li>
                            @endif
                            @if (isset($project->client_company) && $project->client_company)
                                <li class="d-flex align-items-center gap-3 py-4">
                                    <div class="about-page-img d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('frontend/assets/imges/icon/clint-company.svg') }}"
                                            alt="" />
                                    </div>
                                    <div class="about-page-data">
                                        <h6>Client / Company:</h6>
                                        <p>{{ isset($project->client_company) ? $project->client_company : '' }}</p>
                                    </div>
                                </li>
                            @endif
                            @if (isset($project->location) && $project->location)
                                <li class="border-0 d-flex align-items-center gap-3 py-4">
                                    <div class="about-page-img d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('frontend/assets/imges/icon/project-location.svg') }}"
                                            alt="" />
                                    </div>
                                    <div class="about-page-data">
                                        <h6>Project Location:</h6>
                                        <p>{{ isset($project->location) ? $project->location : '' }}</p>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 p-0">
                    <div class="news-detail-img">
                        {{-- <a href="#"> --}}
                        <figure class="image-anime">
                            @if (isset($project->image) && file_exists(public_path('Project/Image/' . $project->image)))
                                <img src="{{ asset('Project/Image/' . $project->image) }}" alt=""
                                    class="img-fluid" />
                            @else
                                <img src="{{ asset('frontend/assets/imges/bg-images/project-detail-img.jpg') }}"
                                    alt="" class="img-fluid" />
                            @endif
                        </figure>
                        {{-- </a> --}}
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="comment-section m-auto">
                            <div class="post-comments">
                                @if (isset($project->description))
                                    <h2 class="comment-heading">Project Information</h2>
                                    <p class="mb-4">
                                        {!! isset($project->description) ? $project->description : '' !!}
                                    </p>
                                @endif
                                @if (isset($project->scope_of_project))
                                    <h2 class="comment-heading">Scope of Project</h2>

                                    <p class="mb-4">
                                        {!! isset($project->scope_of_project) ? $project->scope_of_project : '' !!}
                                    </p>
                                @endif
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
                                </p>

                                <ul>
                                    <li class="fw-bold">
                                        It has survived not only five centuries, but also the leap
                                        into electronic.
                                    </li>
                                    <li class="fw-bold">
                                        Our inboxes are overloaded with promotional emails and
                                        newsletters.
                                    </li>
                                    <li class="fw-bold">
                                        Prospects are more likely to buy if you're ready to sell
                                        Web Contact forms.
                                    </li>
                                </ul> --}}
                                @if (isset($getProjectGalleryImages) && count($getProjectGalleryImages) > 0)
                                    <h2 class="comment-heading">Project Gallery</h2>
                                    <div class="container">
                                        <div id="gallery" class="photos-grid-container gallery">
                                            <div>
                                                <div class="sub d-flex flex-wrap align-items-center gap-3">
                                                    @foreach ($getProjectGalleryImages as $galleryImage)
                                                        <div class="img-box">
                                                            @if (isset($galleryImage->gallery_images) &&
                                                                    file_exists(public_path('Project/GalleryImage/' . $galleryImage->gallery_images)))
                                                                <a href="{{ asset('Project/GalleryImage/' . $galleryImage->gallery_images) }}"
                                                                    class="glightbox" data-glightbox="type: image">
                                                                    <img src="{{ asset('Project/GalleryImage/' . $galleryImage->gallery_images) }}"
                                                                        alt="image" />
                                                                </a>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
