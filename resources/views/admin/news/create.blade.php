@extends('admin.layouts.main')
@section('main')
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">News Cretae</h2>
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
                <form id="newsForm" action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title" maxlength="50"
                                id="title">
                            <span id="title-msg" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Date</label>
                            <input type="text" class="form-control datepicker-input" name="date"
                                placeholder="Select Date">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea name="description" rows="10" id="description" class="form-control" placeholder="Description"></textarea>
                            <label id="description-error" class="error" for="description"></label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Image</label>
                            <input type="file" style="color: black;" class="form-control" name="image">
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

            $("#newsForm").validate({
                ignore: [],
                rules: {
                    title: {
                        required: true,
                        maxlength: 50
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
                        required: true,
                        checkFileExtension: true,
                    },
                },
                messages: {
                    title: {
                        required: "Please enter title",
                        maxlength: "Maximum 50 characters allowed"
                    },
                    date: {
                        required: "Please select date"
                    },
                    description: {
                        required: "Please enter description"
                    },
                    image: {
                        required: "Please upload image",
                        checkFileExtension: "Only png, jpg, jpeg, or svg files are allowed",
                    },
                }
            });

            $('#title').keyup(function() {
                var max = 50;
                var len = $(this).val().length;
                if (len >= max) {
                    $('#title-msg').text('Your characters limit is over');
                } else {
                    $('#title-msg').text('');
                }
            });

            var editor = CKEDITOR.replace('description');
            editor.on('change', function() {
                $('#newsForm').valid();
            });
        });
    </script>
@endsection
