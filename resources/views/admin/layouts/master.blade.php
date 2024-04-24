@php
    $mode = app()->getLocale() == 'ar' ? '-rtl' : '';
@endphp
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initkial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

    <!-- Title -->
    <title> SGCD </title>
    <link rel="icon" href="{{ asset('http://localhost:8000/assets/mediatech/rtl/images/logo_V1_page-0001.jpg') }} "
        type="image/x-icon" style="max-width: 150px; max-height: 150px;" />

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}



    <!-- Add this to the head section of your HTML -->
    <link rel="stylesheet" href="">

    <!-- Icons css -->
    <link href="{{ asset('assets/admin/css' . $mode . '/icons.css') }}" rel="stylesheet">

    <!--  Owl-carousel css-->
    <link href="{{ asset('assets/admin/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

    <!--  Custom Scroll bar-->
    <link href="{{ asset('assets/admin/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

    <!--  Right-sidemenu css -->
    <link href="{{ asset('assets/admin/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!-- Sidemenu css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css' . $mode . '/sidemenu.css') }}">

    <!-- Maps css -->
    <link href="{{ asset('assets/admin/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css' . $mode . '/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css' . $mode . '/style-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css' . $mode . '/skin-modes.css') }}" rel="stylesheet" />

</head>

<body class="main-body app sidebar-mini">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/admin/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <!-- main-sidebar -->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar sidebar-scroll">
            <div class="main-sidebar-header active">
                <h2 class="desktop-logo logo-light active text-center text-4xl font-bold text-primary">SGCD</h2>

                {{-- <a class="desktop-logo logo-dark active" href="#">
                    <img src="{{ asset('assets/mediatech/rtl/images/logo_V1_page-0001.jpg') }}" alt=""
                        title="" class="img-fluid main-logo dark-theme" alt="logo"
                        style="max-width: 150px; max-height: 150px;"></a>
                <a class="logo-icon mobile-logo icon-light active" href="#"><img
                        src="{{ asset('assets/admin/img/brand/favicon.png') }}" class="logo-icon" alt="logo"></a>
                <a class="logo-icon mobile-logo icon-dark active" href="#"><img
                        src="{{ asset('assets/admin/img/brand/favicon-white.png') }}" class="logo-icon dark-theme"
                        alt="logo"></a> --}}
            </div>
            <div class="main-sidemenu">
                <div class="app-sidebar__user clearfix">
                    <div class="dropdown user-pro-body">
                        <div class="">
                            <img alt="user-img" class="avatar avatar-xl brround"
                                src="{{ asset('assets/admin/img/faces/6.jpg') }}"><span
                                class="avatar-status profile-status bg-green"></span>
                        </div>
                        <div class="user-info">
                            <h4 class="font-weight-semibold mt-3 mb-0">{{ Auth::user()->name }}</h4>
                        </div>
                    </div>
                </div>
                @include('admin.layouts.menu')
            </div>
        </aside>
        <!-- main-sidebar -->

        <!-- main-content -->
        <div class="main-content app-content">

            <!-- main-header -->
            <div class="main-header sticky side-header nav nav-item">
                <div class="container-fluid">
                    <div class="main-header-left ">
                        <div class="responsive-logo">
                            <a href="{{ route('admin.index') }}"> <img
                                    src="{{ asset('assets/mediatech/rtl/images/logo_V1_page-0001.jpg') }}"
                                    alt="" title="" class="img-fluid"
                                    style="max-width: 150px; max-height: 150px;"></a>
                            <a href="index.html"> <img
                                    src="{{ asset('assets/mediatech/rtl/images/logo_V1_page-0001.jpg') }}"
                                    alt="" title="" class="img-fluid"
                                    style="max-width: 150px; max-height: 150px;"></a>
                            <a href="index.html"><img src="{{ asset('assets/admin/img/brand/favicon.png') }}"
                                    class="logo-2" alt="logo"></a>
                            <a href="index.html"><img src="{{ asset('assets/admin/img/brand/favicon.png') }}"
                                    class="dark-logo-2" alt="logo"></a>
                        </div>
                        <div class="app-sidebar__toggle" data-toggle="sidebar">
                            <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                            <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
                        </div>
                    </div>
                    <div class="main-header-right">
                        <div class="nav nav-item  navbar-nav-right ml-auto">
                            <div class="nav-item full-screen fullscreen-button">
                                <a class="new nav-link full-screen-link" href="#"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-maximize">
                                        <path
                                            d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                        </path>
                                    </svg></a>
                            </div>
                            <div class="dropdown main-profile-menu nav nav-item nav-link">
                                <a class="profile-user d-flex" href=""><img alt=""
                                        src="{{ asset('assets/admin/img/faces/6.jpg') }}"></a>
                                <div class="dropdown-menu">
                                    <div class="main-header-profile bg-primary p-3">
                                        <div class="d-flex wd-100p">
                                            <div class="main-img-user"><img alt=""
                                                    src="{{ asset('assets/admin/img/faces/6.jpg') }}" class="">
                                            </div>
                                            <div class="ml-3 my-auto">
                                                <h6>{{ Auth::user()->name }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <a class="dropdown-item" href=""><i
                                            class="bx bx-user-circle"></i>Profile</a>
                                    <a class="dropdown-item" href=""><i class="bx bx-cog"></i> Edit
                                        Profile</a>
                                    <a class="dropdown-item" href=""><i class="bx bxs-inbox"></i>Inbox</a>
                                    <a class="dropdown-item" href=""><i
                                            class="bx bx-envelope"></i>Messages</a>
                                    <a class="dropdown-item" href=""><i class="bx bx-slider-alt"></i> Account
                                        Settings</a> --}}
                                    <a class="dropdown-item" href="{{ route('admin.logout') }}"><i
                                            class="bx bx-log-out"></i>
                                        Sign Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /main-header -->

            <!-- container -->
            <div class="container-fluid">

                @yield('content')
            </div>
            <!-- /Container -->
        </div>
        <!-- /main-content -->

        <!-- Message Modal -->
        <div class="modal fade" id="chatmodel" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right chatbox" role="document">
                <div class="modal-content chat border-0">
                    <div class="card overflow-hidden mb-0 border-0">
                        <!-- action-header -->
                        <div class="action-header clearfix">
                            <div class="float-left hidden-xs d-flex ml-2">
                                <div class="img_cont mr-3">
                                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img"
                                        alt="img">
                                </div>
                                <div class="align-items-center mt-2">
                                    <h4 class="text-white mb-0 font-weight-semibold">Daneil Scott</h4>
                                    <span class="dot-label bg-success"></span><span
                                        class="mr-3 text-white">online</span>
                                </div>
                            </div>
                            <ul class="ah-actions actions align-items-center">
                                <li class="call-icon">
                                    <a href="" class="d-done d-md-block phone-button" data-toggle="modal"
                                        data-target="#audiomodal">
                                        <i class="si si-phone"></i>
                                    </a>
                                </li>
                                <li class="video-icon">
                                    <a href="" class="d-done d-md-block phone-button" data-toggle="modal"
                                        data-target="#videomodal">
                                        <i class="si si-camrecorder"></i>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="" data-toggle="dropdown" aria-expanded="true">
                                        <i class="si si-options-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><i class="fa fa-user-circle"></i> View profile</li>
                                        <li><i class="fa fa-users"></i>Add friends</li>
                                        <li><i class="fa fa-plus"></i> Add to group</li>
                                        <li><i class="fa fa-ban"></i> Block</li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" class="" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="si si-close text-white"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- action-header end -->

                        <!-- msg_card_body -->
                        <div class="card-body msg_card_body">
                            <div class="chat-box-single-line">
                                <abbr class="timestamp">February 1st, 2019</abbr>
                            </div>
                            <div class="d-flex justify-content-start">
                                <div class="img_cont_msg">
                                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg"
                                        alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Hi, how are you Jenna Side?
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end ">
                                <div class="msg_cotainer_send">
                                    Hi Connor Paige i am good tnx how about you?
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg"
                                        alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start ">
                                <div class="img_cont_msg">
                                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg"
                                        alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end ">
                                <div class="msg_cotainer_send">
                                    You welcome Connor Paige
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg"
                                        alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start ">
                                <div class="img_cont_msg">
                                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg"
                                        alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Yo, Can you update Views?
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    But I must explain to you how all this mistaken born and I will give
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg"
                                        alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start ">
                                <div class="img_cont_msg">
                                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg"
                                        alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Yo, Can you update Views?
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    But I must explain to you how all this mistaken born and I will give
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg"
                                        alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start ">
                                <div class="img_cont_msg">
                                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg"
                                        alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Yo, Can you update Views?
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    But I must explain to you how all this mistaken born and I will give
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg"
                                        alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start">
                                <div class="img_cont_msg">
                                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg"
                                        alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Okay Bye, text you later..
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>
                        </div>
                        <!-- msg_card_body end -->
                        <!-- card-footer -->
                        <div class="card-footer">
                            <div class="msb-reply d-flex">
                                <div class="input-group">
                                    <input type="text" class="form-control " placeholder="Typing....">
                                    <div class="input-group-append ">
                                        <button type="button" class="btn btn-primary ">
                                            <i class="far fa-paper-plane" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- card-footer end -->
                    </div>
                </div>
            </div>
        </div>

        <!--Video Modal -->
        <div id="videomodal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-dark border-0 text-white">
                    <div class="modal-body mx-auto text-center p-7">
                        <h5>Valex Video call</h5>
                        <img src="../../assets/img/faces/6.jpg"
                            class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
                        <h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
                        <h6>Calling...</h6>
                        <div class="mt-5">
                            <div class="row">
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
                                        <i class="fas fa-video-slash"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#"
                                        data-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-phone bg-danger text-white"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
                                        <i class="fas fa-microphone-slash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- modal-body -->
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->

        <!-- Audio Modal -->
        <div id="audiomodal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content border-0">
                    <div class="modal-body mx-auto text-center p-7">
                        <h5>Valex Voice call</h5>
                        <img src="../../assets/img/faces/6.jpg"
                            class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
                        <h4 class="mb-1  font-weight-semibold">Daneil Scott</h4>
                        <h6>Calling...</h6>
                        <div class="mt-5">
                            <div class="row">
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
                                        <i class="fas fa-volume-up bg-light"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#"
                                        data-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-phone text-white bg-success"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="icon icon-shape  rounded-circle mb-0 mr-3" href="#">
                                        <i class="fas fa-microphone-slash bg-light"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- modal-body -->
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->

        <!-- Footer opened -->
        <div class="main-footer ht-40">
            <div class="container-fluid pd-t-0-f ht-100p">
                <span>Copyright © <a href="#">Africa IT</a>. All rights
                    reserved.</span>
            </div>
        </div>
        <!-- Footer closed -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    @yield('scripts')
    <!-- JQuery min js -->
    <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/ionicons/ionicons.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dashboard.sampledata.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart.flot.sampledata.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/rating/jquery.rating-stars.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/rating/jquery.barrating.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/perfect-scrollbar/p-scroll.js') }}"></script>
    <script src="{{ asset('assets/admin/js/eva-icons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/sidebar/sidebar' . $mode . '.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/sidebar/sidebar-custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/sticky.js') }}"></script>
    <script src="{{ asset('assets/admin/js/modal-popup.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/side-menu/sidemenu.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('assets/admin/js/index.js') }}"></script>
    <script src="{{ asset('assets/admin/js/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.vmap.sampledata.js') }}"></script>
    {{-- ------------------ --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}}

</body>

</html>
