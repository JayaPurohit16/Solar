<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themenate.net/enlink-bs/dist/login-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Aug 2023 11:35:06 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Solar</title>

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}"> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/image/sub-heading-img.svg') }}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex"
            style="background-image: url('assets/images/others/login-3.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <h1 class="img-fluid">Solar</h1>
                                        <h2 class="m-b-0">Sign In</h2>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}" id="adminLogin">
                                        @csrf
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">Email:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" placeholder="Email">
                                            </div>
                                            <label for="email" class="error"
                                                style="display:none;color:red;"></label>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            {{-- <a class="float-right font-size-13 text-muted" href="#">Forget
                                                Password?</a> --}}
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" placeholder="Password">
                                            </div>
                                            <label for="password" class="error"
                                                style="display:none;color:red;"></label>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button class="btn btn-primary">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="{{ asset('assets/js/vendors.min.js') }}"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
        integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $("#adminLogin").validate({
            rules: {
                email: {
                    required: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                email: {
                    required: "Please enter email",
                },
                password: {
                    required: "Please enter password"
                }
            }
        });
    </script>

    @if (Session('info'))
        <script>
            toastr.info('{{ Session('info') }}')
        </script>
    @endif
    @if (Session('success'))
        <script>
            toastr.success('{{ Session('success') }}')
        </script>
    @endif
    @if (Session('error'))
        <script>
            toastr.error('{{ Session('error') }}')
        </script>
    @endif


</body>


<!-- Mirrored from www.themenate.net/enlink-bs/dist/login-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Aug 2023 11:35:17 GMT -->

</html>
