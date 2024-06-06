<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

    <!-- Title -->
    <title> SGCG </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('http://localhost:8000/assets/mediatech/rtl/images/logo_V1_page-0001.jpg') }} "
        type="image/x-icon" style="max-width: 150px; max-height: 150px;" />

    <!-- Icons css -->
    <link href="{{ asset('assets/admin/css/icons.css') }}." rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="{{ asset('assets/admin/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!--  Custom Scroll bar-->
    <link href="{{ asset('assets/admin/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

    <!--  Left-Sidebar css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/sidemenu.css') }}">

    <!--- Style css --->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">

    <!--- Dark-mode css --->
    <link href="{{ asset('assets/admin/css/style-dark.css') }}" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="{{ asset('assets/admin/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- Animations css-->
    <link href="{{ asset('assets/admin/css/animate.css') }}" rel="stylesheet">

</head>

<body class="main-body bg-light">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/admin/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <div class="container-fluid">
            <div class="row no-gutter">
                <!-- The image half -->
                <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                    <div class="row wd-100p mx-auto text-center">
                        <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                            <img src="{{ asset('assets/admin/img/media/login.jpg') }}"
                                class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                        </div>
                    </div>
                </div>
                <!-- The content half -->
                <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                    <div class="login d-flex align-items-center py-2">
                        <!-- Demo content-->
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                    <div class="card-sigin">
                                        <div class="mb-5 d-flex"> <a href="index.html"><img
                                                    src="{{ asset('assets/mediatech/rtl/images/logo_V1_page-0001.jpg') }}"
                                                    alt="" title="" class="img-fluid"
                                                    style="max-width: 100px; max-height: 100px;"></a>
                                            <h1 class="main-logo1 ml-0 mr-0 my-auto tx-28">SG<span>C</span>D</h1>
                                        </div>
                                        <div class="card-sigin">
                                            <div class="row mt-4 mb-2">
                                                <div class="col-12">
                                                    @include('layouts._message')
                                                </div>
                                            </div>
                                            <div class="main-signup-header">
                                                <h2>Bienvenue !</h2>
                                                <h5 class="font-weight-semibold mb-4">Veuillez vous connecter pour
                                                    continuer.</h5>
                                                <form method="POST" action="{{ route('admin.login') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Email</label> <input class="form-control mb-1"
                                                            placeholder="Entrez votre adresse e-mail" type="text"
                                                            name="email">
                                                        @error('email')
                                                            <span class="text-danger ">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">

                                                        <label>Mot de passe</label> <input class="form-control mb-1"
                                                            placeholder="Entrez votre mot de passe" type="password"
                                                            name="password">
                                                        @error('password')
                                                            <span class="text-danger ">{{ $message }}</span>
                                                        @enderror
                                                    </div><button class="btn btn-main-primary btn-block">Sign
                                                        In</button>
                                                </form>
                                                <div class="main-signin-footer mt-2">
                                                    {{-- <p><a href="">Forgot password?</a></p> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End -->
                    </div>
                </div><!-- End -->
            </div>
        </div>

    </div>
    <!-- End Page -->

    <!-- JQuery min js -->
    <script src=" {{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Ionicons js -->
    <script src="{{ asset('assets/admin/plugins/ionicons/ionicons.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assets/admin/plugins/moment/moment.js') }}"></script>

    <!-- eva-icons js -->
    <script src="{{ asset('assets/admin/js/eva-icons.min.js') }}"></script>

    <!-- Rating js-->
    <script src="{{ asset('assets/admin/plugins/rating/jquery.rating-stars.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/rating/jquery.barrating.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>

</body>

</html>
