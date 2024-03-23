@extends('landing.layouts.Master')

@section('content')
    <!-- Main Slider -->
    <section class="main-slider">
        <div class="banner-carousel">
            <!-- Swiper -->
            <div class="swiper-wrapper">

                <div class="swiper-slide slide"
                    style="background-image:url(https://themewagon.github.io/medicalcenter/assets/img/hero/h1_hero.png)">
                    <div class="auto-container">
                        <div class="content clearfix">
                            <div class="title">{{ __('header.small_text_1') }}</div>
                            <h2>{{ __('header.big_text') }}</h2>
                            <div class="text">{{ __('header.small_text_2') }}</div>
                            <div class="btn-box clearfix">
                                <a href="contact.html" class="theme-btn btn-style-two"><span
                                        class="txt">{{ __('navbar.appointment') }}</span></a>
                                <a href="#" class="theme-btn phone-btn"><span
                                        class="icon flaticon-call"></span>052-225-0907</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide"
                    style="background-image:url(https://themewagon.github.io/medicalcenter/assets/img/hero/h1_hero.png)">
                    <div class="auto-container">
                        <div class="content">
                            <div class="title">{{ __('header.small_text_1') }}</div>
                            <h2>{{ __('header.big_text') }}</h2>
                            <div class="text">{{ __('header.small_text_2') }}</div>
                            <div class="btn-box">
                                <a href="#" class="theme-btn btn-style-two"><span
                                        class="txt">{{ __('navbar.appointment') }}</span></a>
                                <a href="contact.html" class="theme-btn phone-btn"><span
                                        class="icon flaticon-call"></span>052-225-0907</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide"
                    style="background-image:url(https://themewagon.github.io/medicalcenter/assets/img/hero/h1_hero.png)">
                    <div class="auto-container">
                        <div class="content">
                            <div class="title">{{ __('header.small_text_1') }}</div>
                            <h2>{{ __('header.big_text') }}</h2>
                            <div class="text">
                                {{ __('header.small_text_2') }}</div>
                            <div class="btn-box">
                                <a href="#" class="theme-btn btn-style-two"><span
                                        class="txt">{{ __('navbar.appointment') }}</span></a>
                                <a href="contact.html" class="theme-btn phone-btn"><span
                                        class="icon flaticon-call"></span>052-225-0907</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="image-layer"
            style="background-image:url({{ asset('assets/mediatech/rtl/images/background/pattern-2.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>BERRADA Ali, Médecin généraliste</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="text">
                            <p>Avec une expérience de 37 ans, le Dr. Berrada Ali est un médecin spécialiste en médecine de
                                travail, président de l’AMCC (Association des Médecins généralistes de Casablanca Centre) et
                                fondateur de l’Association Marocaine de Médecine de Catastrophe. Il a assuré des formations
                                de secourisme pour le compte de plus de 50 entreprises à travers tout le Maroc.</p>
                            <p>Diplômes et formations :</p>
                            <ul style="padding-left: 20px;">
                                <li>&#8226; <span class="ml-2">Doctorat en médecine de la faculté de médecine à
                                        Rabat</span></li>
                                <li>&#8226; <span class="ml-2">Certificat Universitaire de santé au Travail et de
                                        Prévention des Risques
                                        Professionnels
                                        de l'Université Hassan II à Casablanca</span></li>
                                <li>&#8226; <span class="ml-2">Médecin Expert Assermenté près des Tribunaux au
                                        Maroc</span></li>
                                <li>&#8226; <span class="ml-2">Diplôme Universitaire de Diabétologie de l'Université de
                                        Montpellier I</span></li>
                                <li>&#8226; <span class="ml-2">Diplôme de Médecine de Catastrophe</span></li>
                            </ul>
                        </div>
                        <a href="https://www.youtube.com/watch?v=dMcoJMcM0UI&ab_channel=IntegratedCareNorthamptonshire"
                            class="lightbox-image play-btn"><span class="icon flaticon-stethoscope"
                                style="font-size: 30px"></span>Plus d'informations</a>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{ asset('assets/mediatech/rtl/images/background/9171.png ') }}" alt="" />
                            <div class="icon-outer">
                                <span class="icon-inner"><span class="icon flaticon-doctor"></span></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Welcome Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>Services de santé</h2>
                <div class="separator"></div>
            </div>

            <div class="row clearfix">

                <!-- Left Column -->
                <div class="left-column pull-left col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Service Block -->
                        <div class="service-block">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-doctor-stethoscope"></span>
                                </div>
                                <h3><a href="doctors-detail.html">Consultations en médecine générale</a></h3>
                                <div class="text">Consultations générales pour tous les besoins médicaux.</div>
                            </div>
                        </div>

                        <!-- Service Block -->
                        <div class="service-block">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-operating-room"></span>
                                </div>
                                <h3><a href="doctors-detail.html">Médecine du travail</a></h3>
                                <div class="text">Consultations spécialisées en médecine du travail pour assurer la santé
                                    et la sécurité au travail.</div>
                            </div>
                        </div>

                        <!-- Service Block -->
                        <div class="service-block">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-van"></span>
                                </div>
                                <h3><a href="doctors-detail.html">Certificats médicaux</a></h3>
                                <div class="text">Émission de certificats médicaux pour diverses fins.</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Circles Column -->
                <div class="circles-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <div class="circles">
                            <div class="circle-one"></div>
                            <div class="circle-two"></div>
                            <div class="circle-three"></div>
                        </div>

                    </div>
                </div>

                <!-- Right Column -->
                <div class="right-column pull-right col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Service Block -->
                        <div class="service-block-two">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-water"></span>
                                </div>
                                <h3><a href="doctors-detail.html">Vaccinations</a></h3>
                                <div class="text">Administration de vaccinations pour la prévention des maladies.</div>
                            </div>
                        </div>

                        <!-- Service Block -->
                        <div class="service-block-two">
                            <div class="inner-box wow fadeInRight" data-wow-delay="250ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-pharmacy"></span>
                                </div>
                                <h3><a href="doctors-detail.html">Examens de santé préventifs</a></h3>
                                <div class="text">Détection précoce des problèmes de santé pour prévenir les
                                    complications.
                                </div>
                            </div>
                        </div>

                        <!-- Service Block -->
                        <div class="service-block-two">
                            <div class="inner-box wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-nurse"></span>
                                </div>
                                <h3><a href="doctors-detail.html">Gestion des maladies chroniques</a></h3>
                                <div class="text">Consultations et suivi pour les maladies telles que le diabète,
                                    l'hypertension, les maladies cardiaques, etc.</div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Counter Section -->
    <section class="counter-section" style="background-image: url(images/background/pattern-3.png)">
        <div class="auto-container">

            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="37">0</span>
                                </div>
                                <h4 class="counter-title">Années d'expérience</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="50">0</span>
                                </div>
                                <h4 class="counter-title">Formations de secourisme</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="5">0</span>
                                </div>
                                <h4 class="counter-title">Diplômes et certifications</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="6">0</span>
                                </div>
                                <h4 class="counter-title">Services proposés</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Counter Section -->

    <!-- Schedule Section -->
    <section class="schedule-section"
        style="background-image:url('{{ asset('assets/mediatech/rtl/images/background/5.jpg ') }}')">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Schedule Column -->
                <div class="schedule-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>Horaires réguliers</h2> <!-- Updated: Regular Schedule -->
                            <div class="separator"></div>
                        </div>

                        <div class="content">

                            <!-- Title Box -->
                            <ul class="title-box clearfix">
                                <li>Jours</li>
                                <li colspan="2" style="text-align: center;">Heures d'ouverture</li>
                                <li style="text-align: center;">Heure de fermeture</li>
                            </ul>

                            <!-- Content Box - Monday -->
                            <ul class="content-box clearfix">
                                <li>Lundi</li>
                                <li style="text-align: center;">09:00</li>
                                <li style="text-align: center;">18:00</li>
                            </ul>

                            <!-- Content Box - Tuesday -->
                            <ul class="content-box clearfix">
                                <li>Mardi</li>
                                <li style="text-align: center;">09:00</li>
                                <li style="text-align: center;">18:00</li>
                            </ul>

                            <!-- Content Box - Wednesday -->
                            <ul class="content-box clearfix">
                                <li>Mercredi</li>
                                <li style="text-align: center;">09:00</li>
                                <li style="text-align: center;">18:00</li>
                            </ul>

                            <!-- Content Box - Thursday -->
                            <ul class="content-box clearfix">
                                <li>Jeudi</li>
                                <li style="text-align: center;">09:00</li>
                                <li style="text-align: center;">18:00</li>
                            </ul>

                            <!-- Content Box - Friday -->
                            <ul class="content-box clearfix">
                                <li>Vendredi</li>
                                <li style="text-align: center;">09:00</li>
                                <li style="text-align: center;">18:00</li>
                            </ul>

                            <!-- Content Box - Saturday -->
                            <ul class="content-box clearfix">
                                <li>Samedi</li>
                                <li style="text-align: center;">09:00</li>
                                <li style="text-align: center;">14:00</li>
                            </ul>

                        </div>
                    </div>
                </div>

                <!-- Appointment Column -->
                <div class="appointment-column col-lg-5 col-md-12 col-sm-12">
                    <livewire:landing.appointment />
                </div>
                {{-- <div class="appointment-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!-- Upper Box -->
                        <div class="upper-box">
                            <div class="upper-inner">
                                <h3>{{ __('index.get-appointment') }}</h3>
                            </div>
                        </div>

                        <!-- Lower Box -->
                        <div class="lower-box">
                            <div class="upper-inner">

                                <!-- Appointment Form -->
                                <div class="appointment-form">
                                    <form>

                                        <div class="form-group">
                                            <input type="text" name="username"
                                                placeholder="{{ __('index.enter-your-name') }}">
                                            <span class="icon fa fa-user"></span>
                                        </div>

                                        <div class="form-group">
                                            <input type="tel" name="phone"
                                                placeholder="{{ __('index.enter-your-phone-number') }}">
                                            <span class="icon fas fa-phone"></span>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="date" wire:model="selectedDate"
                                                    min="{{ now()->format('Y-m-d') }}"
                                                    class="form-control px-4 text-dark" name="appointment"
                                                    placeholder="{{ __('index.appointment-date') }}" required="">
                                            </div>
                                        </div>
                                        <h5 x-text="$wire.selectedDate"></h5>

                                        <div class="form-group">
                                            <select wire:model.defer="selectedTime" class="custom-select-box">
                                                <option value="">{{ __('index.select-time') }}</option>
                                                @forelse ($availableTimes as $time)
                                                    <option value="{{ $time }}">{{ $time }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <button class="theme-btn submit-btn" type="submit"
                                                name="submit-form">{{ __('index.request-appointment') }}</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div> --}}

            </div>
        </div>
    </section>
    <!-- End Schedule Section -->


    <!-- Get Appointment Section -->
    {{-- <section class="get-appointment-section">
        <div class="auto-container">
            <div class="inner-container">
                <h3>{{ __('index.get-appointment') }}</h3>kkk

                <!-- Appointment Form -->
                <div class="appointment-form-two">
                    <form method="post" action="{{ route('Appointment.store') }}">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label>{{ __('index.full-name') }}</label>
                                <input type="text" name="name" placeholder="{{ __('index.full-name') }}"
                                    required="">
                                <span class="icon fa fa-user"></span>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label>{{ __('index.email') }}</label>
                                <input type="email" name="email" placeholder="{{ __('index.email-placeholder') }}"
                                    required="">
                                <span class="icon fa fa-calendar"></span>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label>{{ __('index.gender') }}</label>
                                <select class="custom-select-box">
                                    <option>{{ __('index.select-gender') }}</option>
                                    <option>{{ __('index.male') }}</option>
                                    <option>{{ __('index.female') }}</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label>{{ __('index.phone-number') }}</label>
                                <input type="tel" name="phone" placeholder="{{ __('index.phone-placeholder') }}"
                                    required="">
                                <span class="icon fas fa-phone"></span>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label>{{ __('index.appointment-date') }}</label>
                                <input type="date" name="date" placeholder="{{ __('index.date-placeholder') }}">
                                <span class="icon fa fa-calendar"></span>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label>{{ __('index.consultant-hour') }}</label>
                                <input type="time" name="time" placeholder="{{ __('index.time-placeholder') }}">
                                <span class="icon fa fa-calendar"></span>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span
                                        class="txt">{{ __('index.submit-request') }}</span></button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section> --}}


    <!-- Map Section -->
    <section id="map-section">
        {{-- <div id="map" style="height: 400px; width: 100%;"></div> --}}
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item mb-5"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.8964873809323!2d-7.6359786235232345!3d33.582036773337585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d29563ec0635%3A0x714d89d00b6ec847!2s332%20Bd%20Brahim%20Roudani%2C%20Casablanca%2020250!5e0!3m2!1sen!2sma!4v1711043419530!5m2!1sen!2sma"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- End map Section -->
@endsection

@section('styles')
    @livewireStyles
@endsection
@section('scripts')
    @livewireScripts
@endsection
