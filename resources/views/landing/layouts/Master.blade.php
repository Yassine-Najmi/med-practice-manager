@php
    $mode = app()->getLocale() == 'ar' ? 'rtl' : 'normal';
@endphp

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title>Medi-tech</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/mediatech/' . $mode . '/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mediatech/' . $mode . '/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mediatech/' . $mode . '/css/responsive.css') }}" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="{{ asset('assets/mediatech/' . $mode . '/css/color-switcher-design.css') }}" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="{{ asset('assets/mediatech/' . $mode . '/css/color-themes/default-theme.css') }}"
        rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    <div class="page-wrapper @if ($mode == 'rtl') rtl @endif">
        @include('landing.layouts.Header')
        @yield('content')
        <!--Main Footer-->
        <footer class="main-footer" style="background-image: url(images/background/2.jpg)">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--big column-->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
                                        </div>
                                        <div class="text">Le Dr. Berrada Ali, fort d'une expérience de 37 ans, est un
                                            médecin spécialiste en médecine de travail. Il préside l’AMCC (Association
                                            des Médecins généralistes de Casablanca Centre) et est le fondateur de
                                            l’Association Marocaine de Médecine de Catastrophe. À son actif, il a assuré
                                            des formations de secourisme pour plus de 50 entreprises à travers tout le
                                            Maroc.</div>
                                        <ul class="social-icons">
                                            {{-- <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                            <li><a href="#"><span class="fab fa-google"></span></a></li>
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-skype"></span></a></li> --}}
                                            <li><a
                                                    href="{{ url('https://www.linkedin.com/in/dr-ali-berrada-99658045/?originalSubdomain=ma') }}"><span
                                                        class="fab fa-linkedin"></span></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <div class="footer-title  clearfix">
                                            <h2>Actes et expertises</h2>
                                            <div class="separator"></div>
                                        </div>
                                        <ul class="footer-list">
                                            <li><a href="#">Consultations médicales</a></li>
                                            <li><a href="#">Médecine du travail</a></li>
                                            <li><a href="#">Certificats médicaux</a></li>
                                            <li><a href="#">Vaccination</a></li>
                                            <li><a href="#">Examens de santé préventifs</a></li>
                                            <li><a href="#">Gestion des maladies <span
                                                        class="ml-4">chroniques</span></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--big column-->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <div class="footer-title  clearfix">
                                            <h2>Horaires d'ouverture</h2>
                                            <div class="separator"></div>
                                        </div>
                                        <ul class="footer-list">
                                            <li>Lundi : 09:00 - 18:00</li>
                                            <li>Mardi : 09:00 - 18:00</li>
                                            <li>Mercredi : 09:00 - 18:00</li>
                                            <li>Jeudi : 09:00 - 18:00</li>
                                            <li>Vendredi : 09:00 - 18:00</li>
                                            <li>Samedi : 09:00 - 14:00</li>
                                        </ul>
                                    </div>
                                </div>


                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget contact-widget">
                                        <div class="footer-title  clearfix">
                                            <h2>Contactez-nous</h2>
                                            <div class="separator"></div>
                                        </div>

                                        <ul class="contact-list">
                                            <li><span class="icon flaticon-placeholder"></span>332, bd Brahim Roudani,
                                                Casablanca</li>
                                            <li>
                                                <span class="icon flaticon-call"></span>Appelez-nous au : <br>
                                                <a href="tel:0522250907">052-225-0907</a>
                                            </li>

                                            <li><span class="icon flaticon-message"></span>Souhaitez-vous poser une
                                                question ?<a href="mailto:info@gmail.com">berrada.ali@gmail.com</a></li>
                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="copyright">Africa IT Innovation &copy; All Rights Reserved</div>
                </div>
            </div>

        </footer>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <!--Search Popup-->
    {{-- <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Search Here" required>
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>

                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Logistics</a></li>
                    <li><a href="#">Freedom</a></li>
                </ul>

            </div>

        </div>
    </div> --}}

    <!-- Color Palate / Color Switcher -->
    {{-- <div class="color-palate">
        <div class="color-trigger">
            <i class="fas fa-cog"></i>
        </div>
        <div class="color-palate-head">
            <h6>Choose Your Color</h6>
        </div>
        <div class="various-color clearfix">
            <div class="colors-list">
                <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
                <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
                <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
                <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
                <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
                <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
                <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
                <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
            </div>
        </div>

        <ul class="rtl-version option-box">
            <li class="rtl">RTL Version</li>
            <li>LTR Version</li>
        </ul>

        <a href="#" class="purchase-btn">Purchase now $17</a>

        <div class="palate-foo">
            <span>You will find much more options for colors and styling in admin panel. This color picker is used only
                for demonstation purposes.</span>
        </div>

    </div> --}}

    <!--Scroll to top-->
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/owl.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/wow.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/appear.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/script.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/color-settings.js') }}"></script>

</body>

</html>
