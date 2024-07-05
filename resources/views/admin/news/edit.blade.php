@extends('admin.layouts.main')
@section('main')
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">News Edit</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i
                            class="anticon anticon-home m-r-5"></i>Home</a>
                    <a href="{{ route('admin.news.index') }}" class="breadcrumb-item"><i class="far fa-newspaper"></i>
                        News</a>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form id="newsForm" action="{{ route('admin.news.update', $newsEdit->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Title</label>
                            <input type="text" class="form-control"
                                value="{{ isset($newsEdit->title) ? $newsEdit->title : '' }}" name="title"
                                placeholder="Title" maxlength="250">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Date</label>
                            <input type="text" class="form-control datepicker-input" name="date"
                                placeholder="Select Date" value="{{ isset($newsEdit->date) ? $newsEdit->date : '' }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea name="description" rows="10" id="description" class="form-control" placeholder="Description">{{ isset($newsEdit->description) ? $newsEdit->description : '' }}</textarea>
                            <label id="description-error" class="error" for="description"></label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Image</label>
                            <input type="file" style="color: black;" class="form-control" name="image">
                            @if (isset($newsEdit->image) && file_exists(public_path('News/Image/' . $newsEdit->image)))
                                <div class="mt-3">
                                    <img src="{{ asset('News/Image/' . $newsEdit->image) }}" alt="" height="100"
                                        width="100">
                                </div>
                            @else
                            @endif
                            <input type="hidden" class="hidden_image"
                                value="{{ isset($newsEdit->image) ? $newsEdit->image : '' }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
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

            $("#newsForm").validate({
                ignore: [],
                rules: {
                    title: {
                        required: true
                    },
                    date: {
                        required: true
                    },
                    description: {
                        required: function(mydata) {
                            CKEDITOR.instances[mydata.id].updateElement();
                            var memberdatacontent = mydata.value.replace(/<[^>]*>/gi, '');
                            return memberdatacontent.length === 0;
                        },
                    },
                    image: {
                        required: function(element) {
                            if ($(".hidden_image").val() != '') {
                                return false;
                            } else {
                                return true;
                            }
                        },
                        checkFileExtension: true
                    },
                },
                messages: {
                    title: {
                        required: "Please enter title"
                    },
                    date: {
                        required: "Please select date"
                    },
                    description: {
                        required: "Please enter description"
                    },
                    image: {
                        required: function(element) {
                            if ($(".hidden_image").val() != '') {
                                return false;
                            } else {
                                return "Please upload image";
                            }
                        },
                        checkFileExtension: "Only png, jpg, jpeg, or svg files are allowed"
                    },
                }
            });

            var editor = CKEDITOR.replace('description');
            editor.on('change', function() {
                $('#newsForm').valid();
            });
        });
    </script>
@endsection
