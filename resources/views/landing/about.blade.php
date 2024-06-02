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
        </div>
    </section>
    <!-- End Doctor Detail Section -->
@endsection
