@extends('landing.layouts.Master')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image: url({{ asset('assets/mediatech/rtl/images/background/5.jpg') }})">
        <div class="auto-container">
            <h1>Dr. BERRADA Ali</h1>
            <div class="text">Médecin généraliste à Casablanca</div>
            <ul class="bread-crumb clearfix">
                <li>
                    <a href="{{ route('home') }}"><span class="fas fa-home"></span> Accueil </a>
                </li>
                <li>À Propos du Médecin</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Doctor Detail Section -->
    <section class="doctor-detail">
        <div class="auto-container">
            <!-- Upper Box -->
            <div class="upper-box">
                <div class="row clearfix">
                    <div class="detail-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="info-header">
                                <p>Fournir des soins de qualité complets</p>
                                <h3>Dr Berrada Ali</h3>
                                <span class="designation">Médecin généraliste</span>
                            </div>
                            <ul class="info-list">
                                <li>
                                    <strong>Expertise</strong>
                                    <p>Médecin généraliste, Médecine de travail</p>
                                </li>
                                <li>
                                    <strong>Education</strong>
                                    <p>Doctorat en médecine de la faculté de médecine à Rabat</p>
                                    <p>Certificat Universitaire de santé au Travail et de Prévention des Risques
                                        Professionnels de l'Université Hassan II à Casablanca</p>
                                    <p>Médecin Expert Assermenté près des Tribunaux au Maroc</p>
                                    <p>Diplôme Universitaire de Diabétologie de l'Université de Montpellier I</p>
                                    <p>Diplôme de Médecine de Catastrophe</p>
                                </li>
                                <li>
                                    <strong>Experience</strong>
                                    <p>37 ans d'expérience</p>
                                </li>
                                <li>
                                    <strong>Profession</strong>
                                    <p>Président de l’AMCC, Fondateur de l’Association Marocaine de Médecine de Catastrophe
                                    </p>
                                    <p>Formateur en secourisme pour plus de 50 entreprises à travers le Maroc</p>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="image-box col-lg-4 col-md-12 col-sm-12" style="width: 370px; height: 413px;">
                        <div class="image">
                            <a href="{{ asset('assets/mediatech/rtl/images/background/9171.png ') }}"
                                class="lightbox-image">
                                <img src="{{ asset('assets/mediatech/rtl/images/background/9171.png ') }}" alt=""
                                    style="width: 100%; height: 100%; object-fit: cover;" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lower Content -->
            <div class="lower-content">
                <div class="row clearfix">
                    <!-- Form Column -->
                    <div class="form-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="appointment-form">
                                <div class="sec-title centered">
                                    <h2>Formulaire de Rendez-vous</h2>
                                    <p>Prenez rendez-vous dès maintenant</p>
                                </div>

                                <form method="post" action="appointment.html">
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="text" name="username" placeholder="Nom" required="" />
                                            <span class="icon fa fa-user"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="tel" name="phone" placeholder="Numéro de téléphone"
                                                required="" />
                                            <span class="icon fas fa-phone"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="text" name="day" placeholder="Jour" />
                                            <span class="icon fa fa-calendar"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="text" name="time" placeholder="Heure" class="" />
                                            <span class="icon far fa-clock"></span>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group text-center">
                                            <button class="theme-btn btn-style-two" type="submit" name="submit-form">
                                                <span class="txt">Prendre un rendez-vous</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-box">
                            {{-- <ul class="contact-list">
                                <li><span>E-mail:</span> example@company.com</li>
                                <li><span>Phone: </span> +000 000 0000</li>
                                <li><span>Timming:</span> 9:00am -5:00pm</li>
                                <li class="clearfix">
                                    <a href="#" class="clearfix theme-btn btn-style-two"><span class="txt btn-txt">On
                                            Vacation</span></a>
                                    <span class="pull-right time">12:00pm -3:00pm</span>
                                </li>
                            </ul>

                            <ul class="social-icon-one">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                            </ul> --}}

                            <div class="timetable">
                                <h3><small>Consultez notre</small> Horaire hebdomadaire</h3>
                                <ul>
                                    <li>Lundi <span>09:00 - 18:00</span></li>
                                    <li>Mardi <span>09:00 - 18:00</span></li>
                                    <li>Mercredi <span>09:00 - 18:00</span></li>
                                    <li>Jeudi <span>09:00 - 18:00</span></li>
                                    <li>Vendredi <span>09:00 - 18:00</span></li>
                                    <li>Samedi <span>09:00 - 14:00</span></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Doctor Detail Section -->
@endsection
