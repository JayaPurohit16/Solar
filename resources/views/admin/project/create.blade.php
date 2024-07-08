@extends('admin.layouts.main')
@section('main')
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Project Cretae</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i
                            class="anticon anticon-home m-r-5"></i>Home</a>
                    <a href="{{ route('admin.project.index') }}" class="breadcrumb-item"><i
                            class="anticon anticon-project"></i> Project</a>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form id="projectForm" action="{{ route('admin.project.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title" maxlength="250">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Project Date</label>
                            <input type="text" class="form-control datepicker-input" name="project_date"
                                placeholder="Project Date">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Energy Generation</label>
                            <input type="text" class="form-control" name="energy_generation"
                                placeholder="Energy Generation" maxlength="250">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Category</label>
                            <select name="category" class="select2" data-placeholder="Select Category">
                                <option></option>
                                @foreach ($getCategory as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Client/Company</label>
                            <input type="text" class="form-control" name="client_company" placeholder="Client/Company"
                                maxlength="250">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Location</label>
                            <input type="text" class="form-control" name="location" placeholder="Location"
                                maxlength="250">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea name="description" rows="10" id="description" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <label for="description" class="error"></label>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Scope Of Project Description</label>
                            <textarea name="scope_of_project" rows="10" id="scope_of_project" class="form-control"
                                placeholder="Scope Of Project Description"></textarea>
                        </div>
                        <label id="scope_of_project-error" class="error" for="scope_of_project"></label>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Image</label>
                            <input type="file" style="color: black;" class="form-control" name="image">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Gallery Images</label>
                            <input type="file" multiple="" style="color: black;" class="form-control"
                                name="gallery_images[]">
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

            $("#projectForm").validate({
                ignore: [],
                rules: {
                    title: {
                        required: true
                    },
                    description: {
                        required: function(mydata) {
                            CKEDITOR.instances[mydata.id].updateElement();
                            var memberdatacontent = mydata.value.replace(/<[^>]*>/gi, '');
                            return memberdatacontent.length === 0;
                        },
                    },
                    scope_of_project: {
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
                    'gallery_images[]': {
                        required: true,
                        checkFileExtension: true
                    }
                },
                messages: {
                    title: {
                        required: "Please enter title"
                    },
                    description: {
                        required: "Please enter description"
                    },
                    scope_of_project: {
                        required: "Please enter scope of project description"
                    },
                    image: {
                        required: "Please upload image",
                        checkFileExtension: "Only png, jpg, jpeg, or svg files are allowed",
                    },
                    'gallery_images[]': {
                        required: "Please upload gallery images",
                        checkFileExtension: "Only png, jpg, jpeg, or svg files are allowed",
                    }
                }
            });


            var editor = CKEDITOR.replace('description');
            var editor = CKEDITOR.replace('scope_of_project');
            editor.on('change', function() {
                $('#projectForm').valid();
            });
        });
    </script>
@endsection
