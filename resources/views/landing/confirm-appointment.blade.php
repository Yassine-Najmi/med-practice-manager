@extends('landing.layouts.Master')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/mediatech/rtl/images/background/5.jpg') }});">
        <div class="auto-container">
            <h1>Confirmez votre rendez-vous</h1>
            <div class="text"></div>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}"><span class="fas fa-home"></span> Accueil </a></li>
                <li>Confirmez votre rendez-vous</li>
            </ul>
        </div>
    </section>



    <!-- Confirm Appointment Form Section -->
    <section class="contact-page-section py-5 bg-light mb-5">
        <div class="container">
            <div class="sec-title text-center mb-4">
                <h2>Confirmez votre rendez-vous</h2>
                <div class="separator mx-auto"></div>
            </div>

            <!-- Display appointment time -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="text-center mb-0 font-weight-bold">Détails du rendez-vous:</p>
                            <ul class="list-unstyled text-center mb-0 mt-3" style="font-size: 16px; line-height: 1.8em">
                                <li><strong>Date:</strong> {{ $full_date }}</li>
                                <li><strong>Jour:</strong> {{ $day_name }}</li>
                                <li><strong>Heure:</strong> {{ $time }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Appointment Form -->
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <form action="{{ route('store-appointment') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="patientName">Nom</label>
                                    <input type="text" class="form-control" id="patientName" name="name"
                                        placeholder="Entrez votre nom">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="patientPhone">Numéro de Téléphone</label>
                                    <input type="tel" class="form-control" id="patientPhone" name="phone"
                                        placeholder="Entrez votre numéro de téléphone">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="patientEmail">Email</label>
                                    <input type="email" class="form-control" id="patientEmail" name="email"
                                        placeholder="Entrez votre email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Include appointment date, time, and day_name as hidden inputs -->
                                <input type="hidden" name="full_date" value="{{ $full_date }}">
                                <input type="hidden" name="time" value="{{ $time }}">
                                <input type="hidden" name="day_name" value="{{ $day_name }}">
                                <button type="submit" class="btn btn-primary btn-block">Confirmer le Rendez-vous</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- End Appointment Form Section -->
@endsection
