<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Solar</title>

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}"> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('public/frontend/assets/image/sub-heading-img.svg') }}">

    <!-- page css -->
    {{-- Data Table Link --}}
    <link href="{{ asset('public/assets/vendors/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    {{-- Date Picker Link --}}
    <link href="{{ asset('public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    {{-- Select 2 Link --}}
    <link href="{{ asset('public/assets/vendors/select2/select2.css') }}" rel="stylesheet">
    <!-- Core css -->
    <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet">

    <style>
        .error {
            color: red;
        }
    </style>

</head>

<body>

    <?php
    $setting = App\Models\Cms::first();
    ?>

    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark mt-1">
                    <a href="{{ route('admin.dashboard') }}">
                        <img src="{{ asset('public/frontend/assets/image/solor-logo.svg') }}" width="120px;" height="60px"
                            alt="Logo">
                        <img class="logo-fold" src="{{ asset('public/frontend/assets/image/solor-logo.svg') }}" width="75px;"
                            height="60px" alt="Logo">
                        {{-- <h4 style="align-content: center;height: 65px;" class="custom">Solar</h4> --}}
                        {{-- @if (isset($setting))
                            @if (isset($setting->logo) && file_exists(public_path('Cms/Logo/' . $setting->logo)))
                                <div class="mt-1">
                                    <img src="{{ asset('Cms/Logo/' . $setting->logo) }}" width="120px;" height="60px"
                                        alt="Logo">
                                    <img class="logo-fold" src="{{ asset('Cms/Logo/' . $setting->logo) }}"
                                        width="75px;" height="60px" alt="Logo">
                                </div>
                            @else
                                <h4 style="align-content: center;height: 65px;" class="custom">Solar</h4>
                            @endif
                        @else
                            <h4 style="align-content: center;height: 65px;" class="custom">Solar</h4>
                        @endif --}}
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="{{ asset('public/assets/images/avatars/profile_image.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="{{ asset('public/assets/images/avatars/profile_image.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold">
                                                {{ isset(Auth::user()->name) ? ucfirst(Auth::user()->name) : '' }}
                                            </p>
                                            <p class="m-b-0 opacity-07">
                                                {{ isset(Auth::user()->phone_number) ? Auth::user()->phone_number : '' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Edit Profile</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a> --}}
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"
                                    class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10">Logout</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->
