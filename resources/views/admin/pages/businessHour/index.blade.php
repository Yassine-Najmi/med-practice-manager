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
            <h1 class="text-center mt-4 mb-4">Heures du travail</h1>
            @include('layouts._message')
            <form action="{{ route('admin.business-hours.update') }}" method="post">
                @csrf
                <div class="row">
                    @foreach ($businessHours as $businessHour)
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm">
                                <h4 class="card-header text-center font-weight-bold">
                                    {{ $businessHour['day'] }}
                                </h4>
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="hidden" id="day-{{ $businessHour['id'] }}"
                                            name="businessHours[{{ $businessHour['id'] }}][day]"
                                            value="{{ $businessHour['day'] }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="from-{{ $businessHour['id'] }}">de</label>
                                        <input type="time" class="form-control" id="from-{{ $businessHour['id'] }}"
                                            name="businessHours[{{ $businessHour['id'] }}][from]"
                                            value="{{ $businessHour['from'] }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="to-{{ $businessHour['id'] }}">à</label>
                                        <input type="time" class="form-control" id="to-{{ $businessHour['id'] }}"
                                            name="businessHours[{{ $businessHour['id'] }}][to]"
                                            value="{{ $businessHour['to'] }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="step-{{ $businessHour['id'] }}">étape (minutes)</label>
                                        <input type="number" class="form-control" id="step-{{ $businessHour['id'] }}"
                                            name="businessHours[{{ $businessHour['id'] }}][step]"
                                            value="{{ $businessHour['step'] }}">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="hidden" name="businessHours[{{ $businessHour['id'] }}][off]"
                                            value="0"> <!-- default value if unchecked -->
                                        <input type="checkbox" class="form-check-input" id="off-{{ $businessHour['id'] }}"
                                            name="businessHours[{{ $businessHour['id'] }}][off]" value="1"
                                            {{ $businessHour['off'] ? 'checked' : '' }}>
                                        <label class="form-check-label" for="off-{{ $businessHour['id'] }}">Off</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mb-5">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection
{{--
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
@endsection --}}
