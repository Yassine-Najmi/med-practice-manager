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


    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Prendre un rendez-vous</h2>
                <div class="separator"></div>
            </div>

            <!-- Formulaire de contact -->
            <div class="row">
                @foreach ($appointments as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-header text-center">
                                <h5>{{ $item['date'] }} - {{ $item['day_name'] }}</h5>
                            </div>
                            <div class="card-body text-center">
                                @if (count($item['available_hours']) > 0)
                                    @foreach ($item['available_hours'] as $index => $hour)
                                        <button class="btn btn-primary m-1" data-toggle="modal"
                                            data-target="#appointmentModal{{ $index }}">
                                            {{ $hour }}
                                        </button>

                                        <!-- Unique Modal for Each Time Slot -->
                                        <div class="modal fade" id="appointmentModal{{ $index }}" tabindex="-1"
                                            aria-labelledby="appointmentModalLabel{{ $index }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="appointmentModalLabel{{ $index }}">
                                                            Prendre Rendez-vous
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="appointmentDate{{ $index }}">Date</label>
                                                                <input type="text" class="form-control"
                                                                    id="appointmentDate{{ $index }}" name="date"
                                                                    value="{{ $item['date'] }}" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="appointmentTime{{ $index }}">Heure</label>
                                                                <input type="text" class="form-control"
                                                                    id="appointmentTime{{ $index }}" name="time"
                                                                    value="{{ $hour }}" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="patientName{{ $index }}">Nom</label>
                                                                <input type="text" class="form-control"
                                                                    id="patientName{{ $index }}" name="name"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="patientPhone{{ $index }}">Numéro de
                                                                    Téléphone</label>
                                                                <input type="tel" class="form-control"
                                                                    id="patientPhone{{ $index }}" name="phone"
                                                                    required>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Confirmer le
                                                                Rendez-vous</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

    <!-- End Contact Page Section -->

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
@section('scripts')
    <!-- Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
