@extends('admin.layouts.main')
@section('main')
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">CMS</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i
                            class="anticon anticon-home m-r-5"></i>Home</a>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form id="cmsForm" action="{{ route('admin.cms.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Support & Email</label>
                            <input type="email" class="form-control"
                                value="{{ isset($cms->support_email) ? $cms->support_email : '' }}" name="support_email"
                                placeholder="Support & Email" maxlength="250">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Customer Support</label>
                            <input type="text" class="form-control" onkeypress="return /[0-9]/i.test(event.key)"
                                value="{{ isset($cms->customer_support) ? $cms->customer_support : '' }}" maxlength="10"
                                minlength="10" name="customer_support" placeholder="Customer Support">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Our Location</label>
                            <input type="text" class="form-control"
                                value="{{ isset($cms->our_location) ? $cms->our_location : '' }}" name="our_location"
                                placeholder="Our Location" maxlength="250">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Facebook Link</label>
                            <input type="text" class="form-control"
                                value="{{ isset($cms->facebook_link) ? $cms->facebook_link : '' }}" name="facebook_link"
                                placeholder="Facebook Link" maxlength="250">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Twitter Link</label>
                            <input type="text" class="form-control"
                                value="{{ isset($cms->twitter_link) ? $cms->twitter_link : '' }}" name="twitter_link"
                                placeholder="Twitter Link" maxlength="250">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Linkedin Link</label>
                            <input type="text" class="form-control"
                                value="{{ isset($cms->linkedin_link) ? $cms->linkedin_link : '' }}" name="linkedin_link"
                                placeholder="Linkedin Link" maxlength="250">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Instagram Link</label>
                            <input type="text" class="form-control"
                                value="{{ isset($cms->instagram_link) ? $cms->instagram_link : '' }}" name="instagram_link"
                                placeholder="Instagram Link" maxlength="250">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Header Logo</label>
                            <input type="file" class="form-control" name="logo">
                            @if (isset($cms->logo) && file_exists(public_path('Cms/Logo/' . $cms->logo)))
                                <div class="mt-3">
                                    <img src="{{ asset('Cms/Logo/' . $cms->logo) }}" alt="Logo" height="100"
                                        width="100">
                                </div>
                            @else
                            @endif
                            <input type="hidden" class="hidden_logo" value="{{ isset($cms->logo) ? $cms->logo : '' }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Footer Logo</label>
                            <input type="file" class="form-control" name="footer_logo">
                            @if (isset($cms->footer_logo) && file_exists(public_path('Cms/FooterLogo/' . $cms->footer_logo)))
                                <div class="mt-3">
                                    <img src="{{ asset('Cms/FooterLogo/' . $cms->footer_logo) }}" alt="footer_logo"
                                        height="100" width="100">
                                </div>
                            @else
                            @endif
                            <input type="hidden" class="hidden_footer_logo"
                                value="{{ isset($cms->footer_logo) ? $cms->footer_logo : '' }}">
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

            $("#cmsForm").validate({
                ignore: [],
                rules: {
                    support_email: {
                        required: true
                    },
                    customer_support: {
                        required: true
                    },
                    our_location: {
                        required: true
                    },
                    facebook_link: {
                        required: true,
                        url: true,
                    },
                    twitter_link: {
                        required: true,
                        url: true,
                    },
                    linkedin_link: {
                        required: true,
                        url: true,
                    },
                    instagram_link: {
                        required: true,
                        url: true,
                    },
                    logo: {
                        required: function(element) {
                            if ($(".hidden_logo").val() != '') {
                                return false;
                            } else {
                                return true;
                            }
                        },
                        checkFileExtension: true
                    },
                    footer_logo: {
                        required: function(element) {
                            if ($(".hidden_footer_logo").val() != '') {
                                return false;
                            } else {
                                return true;
                            }
                        },
                        checkFileExtension: true
                    },
                },
                messages: {
                    support_email: {
                        required: "Please enter support email"
                    },
                    customer_support: {
                        required: "Please enter cutomer support"
                    },
                    our_location: {
                        required: "Please enter our location"
                    },
                    facebook_link: {
                        required: "Please enter facebook link",
                        url: "Please enter a valid url"
                    },
                    twitter_link: {
                        required: "Please enter twitter link",
                        url: "Please enter a valid url"
                    },
                    linkedin_link: {
                        required: "Please enter linkedin link",
                        url: "Please enter a valid url"
                    },
                    instagram_link: {
                        required: "Please enter instagram link",
                        url: "Please enter a valid url"
                    },
                    logo: {
                        required: function(element) {
                            if ($(".hidden_logo").val() != '') {
                                return false;
                            } else {
                                return "Please upload header logo";
                            }
                        },
                        checkFileExtension: "Only png, jpg, jpeg, or svg files are allowed."
                    },
                    footer_logo: {
                        required: function(element) {
                            if ($(".hidden_footer_logo").val() != '') {
                                return false;
                            } else {
                                return "Please upload footer logo";
                            }
                        },
                        checkFileExtension: "Only png, jpg, jpeg, or svg files are allowed."
                    },
                }
            });
        });
    </script>
@endsection
