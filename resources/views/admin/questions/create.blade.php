@extends('admin.layouts.main')
@section('main')
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Questions Cretae</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i
                            class="anticon anticon-home m-r-5"></i>Home</a>
                    <a href="{{ route('admin.questions.index') }}" class="breadcrumb-item"><i
                            class="anticon anticon-question"></i> Questions</a>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form id="questionsForm" action="{{ route('admin.questions.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Questions</label>
                            <textarea name="questions" rows="5" class="form-control" placeholder="Questions"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Answers</label>
                            <textarea name="answers" rows="5" class="form-control" placeholder="Answers"></textarea>
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
            $("#questionsForm").validate({
                ignore: [],
                rules: {
                    questions: {
                        required: true
                    },
                    answers: {
                        required: true
                    }
                },
                messages: {
                    questions: {
                        required: "Please enter questions"
                    },
                    answers: {
                        required: "Please enter answers"
                    }
                }
            });
        });
    </script>
@endsection
