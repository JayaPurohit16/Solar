@extends('admin.layouts.main')
@section('main')
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Category Edit</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i
                            class="anticon anticon-home m-r-5"></i>Home</a>
                    <a href="{{ route('admin.category.index') }}" class="breadcrumb-item"><i
                            class="anticon anticon-build"></i></i> Category</a>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form id="categoryForm" action="{{ route('admin.category.update', $editCategory->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Title</label>
                            <input type="text" class="form-control"
                                value="{{ isset($editCategory->title) ? $editCategory->title : '' }}" name="title"
                                placeholder="Title" maxlength="250">
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

            $("#categoryForm").validate({
                ignore: [],
                rules: {
                    title: {
                        required: true
                    }
                },
                messages: {
                    title: {
                        required: "Please enter title"
                    }
                }
            });
        });
    </script>
@endsection
