@extends('admin.layouts.master')

@section('content')
    <!-- breadcrumb -->
    {{-- <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Rendez-vous</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Tables
                    des Rendez-vous</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <a class="btn ripple btn-primary" data-target="#modaldemo1" data-toggle="modal" href="">Ajouter un
                    Nouveau Rendez-vous</a>
            </div>
        </div>
    </div> --}}
    <!-- breadcrumb -->

    <!-- row opened -->
    <div class="container-fluid">
        <div class="breadcrumb-header justify-content-between"></div>
        <div class="container">
            <h1 class="text-center mt-4 mb-4">
                Heures d'ouverture
            </h1>
            @include('layouts._message')
            <form id="appointment-form" action="{{ route('AddAppointement') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="{{ __('index.enter-your-name') }}" required>
                    <span class="icon fa fa-user"></span>
                </div>

                <div class="form-group">
                    <input type="email" name="email" placeholder="Entrez votre adresse e-mail" required>
                    <span class="icon fas fa-envelope"></span>
                </div>

                <div class="form-group">
                    <input type="date" name="date" class="form-control px-4 text-dark"
                        value="{{ now()->format('Y-m-d') }}" required min="{{ now()->format('Y-m-d') }}">
                </div>

                <div class="form-group">
                    <select name="time" class="custom-select-box">
                        @foreach ($businessHours as $businessHour)
                            @if (!$businessHour->off)
                                @php
                                    $start = Carbon\Carbon::parse($businessHour->from);
                                    $end = Carbon\Carbon::parse($businessHour->to);
                                @endphp
                                @while ($start < $end)
                                    <option value="{{ $start->format('H:i') }}">{{ $start->format('g:i A') }}</option>
                                    @php
                                        $start->addMinutes($businessHour->step);
                                    @endphp
                                @endwhile
                            @endif
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
@endsection

@section('scripts')
    <script>
        document.getElementById('appointment-date').addEventListener('change', function() {
            var selectedDate = this.value;

            // Make an AJAX request to fetch business hours for the selected date
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/business-hours?date=' + selectedDate);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var businessHours = JSON.parse(xhr.responseText);

                        // Update appointment time options based on the fetched business hours
                        var appointmentTimeSelect = document.getElementById('appointment-time');
                        appointmentTimeSelect.innerHTML = '';
                        businessHours.forEach(function(businessHour) {
                            if (!businessHour.off) {
                                var start = new Date('1970-01-01T' + businessHour.from);
                                var end = new Date('1970-01-01T' + businessHour.to);
                                var step = businessHour.step * 60000; // Convert minutes to milliseconds
                                while (start < end) {
                                    var option = document.createElement('option');
                                    option.value = start.toLocaleTimeString('en-US', {
                                        hour12: false
                                    });
                                    option.textContent = start.toLocaleTimeString('en-US', {
                                        hour: '2-digit',
                                        minute: '2-digit'
                                    });
                                    appointmentTimeSelect.appendChild(option);
                                    start.setTime(start.getTime() + step);
                                }
                            }
                        });
                    } else {
                        console.error('Failed to fetch business hours');
                    }
                }
            };
            xhr.send();
        });
    </script>
@endsection
