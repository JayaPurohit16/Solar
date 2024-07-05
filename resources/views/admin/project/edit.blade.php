@extends('admin.layouts.main')
@section('main')
    <style>
        .remove-image {
            display: flex;
            gap: 15px;
            margin-left: 40px;
        }

        .delete-icon {
            top: 10px;
            right: 10px;
            background-color: rgb(241 47 29 / 78%);
            border: 1px solid transparent;
            border-radius: 50px;
            padding: 5px;
            transition: background-color 0.3s ease;
            width: 35px;
            height: 33px;
            margin-left: -59px;
            margin-top: 5px;
        }

        .delete-icon:hover {
            background-color: red;
            color: white !important;
        }
    </style>

    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Project Edit</h2>
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
                <form id="projectForm" action="{{ route('admin.project.update', $projectEdit->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Title</label>
                            <input type="text" class="form-control"
                                value="{{ isset($projectEdit->title) ? $projectEdit->title : '' }}" name="title"
                                placeholder="Title" maxlength="250">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Project Date</label>
                            <input type="text"
                                value="{{ isset($projectEdit->project_date) ? $projectEdit->project_date : '' }}"
                                class="form-control datepicker-input" name="project_date" placeholder="Project Date">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Energy Generation</label>
                            <input type="text" class="form-control"
                                value="{{ isset($projectEdit->energy_generation) ? $projectEdit->energy_generation : '' }}"
                                name="energy_generation" placeholder="Energy Generation" maxlength="250">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Category</label>
                            <select name="category" class="select2" data-placeholder="Select Category">
                                <option></option>
                                @foreach ($getCategory as $category)
                                    <option
                                        value="{{ $category->id }}"{{ $projectEdit->category == $category->id ? 'selected' : '' }}>
                                        {{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Client/Company</label>
                            <input type="text" class="form-control"
                                value="{{ isset($projectEdit->client_company) ? $projectEdit->client_company : '' }}"
                                name="client_company" placeholder="Client/Company" maxlength="250">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Location</label>
                            <input type="text" class="form-control"
                                value="{{ isset($projectEdit->location) ? $projectEdit->location : '' }}" name="location"
                                placeholder="Location" maxlength="250">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea name="description" rows="10" id="description" class="form-control" placeholder="Description">{{ isset($projectEdit->description) ? $projectEdit->description : '' }}</textarea>
                        </div>
                        <label for="description" class="error"></label>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Scope Of Project Description</label>
                            <textarea name="scope_of_project" rows="10" id="scope_of_project" class="form-control"
                                placeholder="Scope Of Project Description">{{ isset($projectEdit->scope_of_project) ? $projectEdit->scope_of_project : '' }}</textarea>
                        </div>
                        <label id="scope_of_project-error" class="error" for="scope_of_project"></label>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                            @if (isset($projectEdit->image) && file_exists(public_path('Project/Image/' . $projectEdit->image)))
                                <div class="mt-3">
                                    <img src="{{ asset('Project/Image/' . $projectEdit->image) }}" alt=""
                                        height="100" width="100">
                                </div>
                            @else
                            @endif
                            <input type="hidden" class="hidden_image"
                                value="{{ isset($projectEdit->image) ? $projectEdit->image : '' }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Gallery Images</label>
                            <input type="file" multiple="" class="form-control" name="gallery_images[]">
                        </div>

                        <h3>Gallery Images</h3>
                        <div class="col-md-12 mt-2">
                            <div class="row image">
                                @foreach ($projectGalleryImages as $galleryImages)
                                    @if (isset($galleryImages))
                                        @if (isset($galleryImages->gallery_images) &&
                                                file_exists(public_path('Project/GalleryImage/' . $galleryImages->gallery_images)))
                                            <div class="remove-image mt-3">
                                                <img src="{{ asset('Project/GalleryImage/' . $galleryImages->gallery_images) }}"
                                                    height="120" width="120" style="border-radius: 15px;"
                                                    class="hidden_gallery_images">
                                                <a class="delete-icon" href="#"
                                                    style="text-decoration: none;color: white;font-size: 15px;"data-image-id="{{ $galleryImages->id }}"
                                                    onclick="deleteGalleryImage(event)">
                                                    <i style="margin-left: 3.5px;" class="anticon anticon-delete"></i>
                                                </a>
                                            </div>
                                        @else
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function deleteGalleryImage(event) {
            event.preventDefault();

            var $deleteIcon = $(event.currentTarget);
            var imageId = $deleteIcon.data('image-id');
            var deleteUrl = '{{ route('admin.project.galleryImagesDelete', ':id') }}';
            deleteUrl = deleteUrl.replace(':id', imageId);

            swal({
                title: `Are you sure you want to delete this gallery image?`,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((result) => {
                if (result) {
                    $.ajax({
                        url: deleteUrl,
                        method: 'GET',
                        success: function(response) {
                            $deleteIcon.closest('.remove-image').remove();
                        },
                        error: function(xhr, status, error) {
                            swal(
                                'Error!',
                                'Failed to delete the image.',
                                'error'
                            );
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        }

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
                        required: function(element) {
                            if ($(".hidden_image").val() != '') {
                                return false;
                            } else {
                                return true;
                            }
                        },
                        checkFileExtension: true
                    },
                    'gallery_images[]': {
                        required: function(element) {
                            return $(".hidden_gallery_images").length === 0;
                        },
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
                        required: function(element) {
                            if ($(".hidden_image").val() != '') {
                                return false;
                            } else {
                                return "Please upload image";
                            }
                        },
                        checkFileExtension: "Only png, jpg, jpeg, or svg files are allowed"
                    },
                    'gallery_images[]': {
                        required: "Please upload gallery images",
                        checkFileExtension: "Only png, jpg, jpeg, or svg files are allowed"
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
