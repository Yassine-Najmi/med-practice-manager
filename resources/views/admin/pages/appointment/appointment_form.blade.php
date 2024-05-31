@extends('landing.layouts.Master')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/mediatech/rtl/images/background/5.jpg') }});">
        <!-- Your existing code for page title -->
    </section>

    <!-- Appointment Form Section -->
    <section class="appointment-form-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Prendre un rendez-vous</h2>
                <div class="separator"></div>
            </div>

            <!-- Display appointment time -->
            <div class="text-center mb-4">
                <p>Heure de rendez-vous sélectionnée: {{ $selectedAppointmentTime }}</p>
            </div>

            <!-- Appointment Form -->
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('submit-appointment') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="patientName">Nom</label>
                                    <input type="text" class="form-control" id="patientName" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="patientPhone">Numéro de Téléphone</label>
                                    <input type="tel" class="form-control" id="patientPhone" name="phone" required>
                                </div>
                                <!-- Include appointment date and time as hidden inputs -->
                                <input type="hidden" name="appointment_date" value="{{ $selectedAppointmentDate }}">
                                <input type="hidden" name="appointment_time" value="{{ $selectedAppointmentTime }}">
                                <button type="submit" class="btn btn-primary">Confirmer le Rendez-vous</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Appointment Form Section -->
@endsection
