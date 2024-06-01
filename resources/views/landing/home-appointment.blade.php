@extends('landing.layouts.Master')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/mediatech/rtl/images/background/5.jpg') }});">
        <div class="auto-container">
            <h1>Prendre un Rendez-vous</h1>
            <div class="text">Comment pouvons-nous vous aider ? Réservez votre rendez-vous</div>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}"><span class="fas fa-home"></span> Accueil </a></li>
                <li>Prendre un Rendez-vous</li>
            </ul>
        </div>
    </section>


    <section class="contact-page-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="text mb-4 h3"> @include('layouts._message')</div>
                <h2>Prendre un rendez-vous</h2>
                <div class="separator"></div>
            </div>
            <div class="row">
                @foreach ($appointments as $cardIndex => $item)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-header text-center">
                                <h5>{{ $item['date'] }} - {{ $item['day_name'] }}</h5>
                            </div>
                            <div class="card-body text-center">

                                @if (count($item['available_hours']) > 0 && !$item['off'])
                                    @foreach ($item['business_hours'] as $hourIndex => $hour)
                                        @if (in_array($hour, $item['available_hours']))
                                            <form action="{{ route('confirm-appointment') }}" method="POST"
                                                class="d-inline-block">
                                                @csrf
                                                <input type="hidden" name="full_date" value="{{ $item['full_date'] }}">
                                                <input type="hidden" name="day_name" value="{{ $item['day_name'] }}">
                                                <input type="hidden" name="time" value="{{ $hour }}">
                                                <button type="submit" name="time" value="{{ $hour }}"
                                                    class="btn btn-primary m-1">{{ $hour }}</button>
                                            </form>
                                        @else
                                            <p class="btn btn-secondary disabled m-1">{{ $hour }}</p>
                                        @endif
                                    @endforeach
                                @else
                                    <p>Pas d'heures disponibles</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
        </div>
    </section>


    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="outer-container">
            <div class="auto-container clearfix">
                <div class="map-content">
                    <div class="title">Besoin d'aide ?</div>
                    <h2>Coordonnées</h2>
                    <ul class="info-list">
                        <li><span class="icon fas fa-map-marker-alt"></span>332, bd Brahim Roudani, Casablanca</li>
                        <li><span class="icon fas fa-phone-volume"></span>052-225-0907</li>
                        <li><span class="icon fas fa-envelope"></span>berrada.ali@gmail.com</li>
                        <li><span class="icon far fa-clock"></span>Lundi - Vendredi: 09:00 - 18:00<br>Samedi: 09:00 - 14:00
                        </li>
                    </ul>

                    <ul class="social-icons">
                        <li><a href="#"><span class="fab fa-linkedin fa-2x"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="map-outer">
                <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap"
                    data-hue="#ffc400" data-title="Envato" data-icon-path="images/icons/map-marker.png"
                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                    <iframe class="embed-responsive-item mb-5" style="height: 100%; width: 100%;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.8964873809323!2d-7.6359786235232345!3d33.582036773337585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d29563ec0635%3A0x714d89d00b6ec847!2s332%20Bd%20Brahim%20Roudani%2C%20Casablanca%2020250!5e0!3m2!1sen!2sma!4v1711043419530!5m2!1sen!2sma"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>


        </div>
    </section>
    <!-- End Map Section -->
@endsection
