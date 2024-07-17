@extends('admin.layouts.main')
@section('main')
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.category.index') }}">
                            <div class="media align-items-center">
                                <div class="avatar avatar-icon avatar-lg avatar-blue">
                                    <i class="anticon anticon-build"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="m-b-0">{{ isset($category) ? $category : '0' }}</h2>
                                    <p class="m-b-0 text-muted">Category</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.project.index') }}">
                            <div class="media align-items-center">
                                <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                    <i class="anticon anticon-project"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="m-b-0">{{ isset($project) ? $project : '0' }}</h2>
                                    <p class="m-b-0 text-muted">Project</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.services.index') }}">
                            <div class="media align-items-center">
                                <div class="avatar avatar-icon avatar-lg avatar-gold">
                                    <i class="anticon anticon-appstore"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="m-b-0">{{ isset($services) ? $services : '0' }}</h2>
                                    <p class="m-b-0 text-muted">Product</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.news.index') }}">
                            <div class="media align-items-center">
                                <div class="avatar avatar-icon avatar-lg avatar-purple">
                                    <i class="far fa-newspaper"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="m-b-0">{{ isset($news) ? $news : '0' }}</h2>
                                    <p class="m-b-0 text-muted">News</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
