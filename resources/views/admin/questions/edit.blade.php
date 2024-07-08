@extends('admin.layouts.main')
@section('main')
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">FAQ Edit</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i
                            class="anticon anticon-home m-r-5"></i>Home</a>
                    <a href="{{ route('admin.questions.index') }}" class="breadcrumb-item"><i
                            class="anticon anticon-question"></i> FAQ</a>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form id="questionsForm" action="{{ route('admin.questions.update', $questionsEdit->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Questions</label>
                            <textarea name="questions" rows="5" class="form-control" placeholder="Questions">{{ isset($questionsEdit->questions) ? $questionsEdit->questions : '' }}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Answers</label>
                            <textarea name="answers" rows="5" class="form-control" placeholder="Answers">{{ isset($questionsEdit->answers) ? $questionsEdit->answers : '' }}</textarea>
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
