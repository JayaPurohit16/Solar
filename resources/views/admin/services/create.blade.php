@extends('admin.layouts.main')
@section('main')
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Services Cretae</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i
                            class="anticon anticon-home m-r-5"></i>Home</a>
                    <a href="{{ route('admin.services.index') }}" class="breadcrumb-item"><i class="fas fa-cog"></i>
                        Services</a>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form id="servicesForm" action="{{ route('admin.services.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title" maxlength="250">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea name="description" rows="10" id="description" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <label for="description" class="error"></label>
                    </div>
                    <hr>
                    <h3>Why us!</h3>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea name="why_us_description" rows="10" id="why_us_description" class="form-control"
                                placeholder="Description"></textarea>
                        </div>
                        <label for="why_us_description" class="error"></label>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Video Link</label>
                            <input type="text" name="why_us_video_link" class="form-control" placeholder="Video Link" maxlength="250">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $.validator.addMethod('checkFileExtension', function(value, element) {
                var allowedExtensions = ['png', 'jpg', 'jpeg', 'svg'];
                // Check each file individually
                for (var i = 0; i < element.files.length; i++) {
                    var extension = element.files[i].name.split('.').pop().toLowerCase();
                    if (!allowedExtensions.includes(extension)) {
                        return false;
                    }
                }
                return true;
            }, 'Only png, jpg, jpeg, or svg files are allowed.');

            $("#servicesForm").validate({
                ignore: [],
                rules: {
                    title: {
                        required: true
                    },
                    image: {
                        required: true,
                        checkFileExtension: true
                    },
                    description: {
                        required: true
                    },
                    why_us_description: {
                        required: true
                    },
                    why_us_video_link: {
                        required: true,
                        url: true
                    },
                },
                messages: {
                    title: {
                        required: "Please enter title"
                    },
                    image: {
                        required: "Please upload image",
                        checkFileExtension: "Only png, jpg, jpeg, or svg files are allowed"
                    },
                    description: {
                        required: "Please enter description"
                    },
                    why_us_description: {
                        required: "Please enter description"
                    },
                    why_us_video_link: {
                        required: "Please enter video link",
                        url: "Please enter a valid url"
                    },
                }
            });

            var editor = CKEDITOR.replace('description');
            editor.on('change', function() {
                $('#servicesForm').valid();
            });

            var editor = CKEDITOR.replace('why_us_description');
            editor.on('change', function() {
                $('#servicesForm').valid();
            });
        });
    </script>
@endsection
