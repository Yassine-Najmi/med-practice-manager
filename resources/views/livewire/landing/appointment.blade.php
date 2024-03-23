<!-- Schedule Section -->
<section class="schedule-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Schedule Column -->
            <div class="schedule-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <h2>{{ __('index.regular-schedule-title') }}</h2>
                        <div class="separator"></div>
                    </div>

                    <!-- Display the schedule here -->
                    <!-- You can replace this with Livewire component -->
                    <livewire:landing.schedule />

                </div>
            </div>

            <!-- Appointment Column -->
            <div class="appointment-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
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
                                        <input type="text" placeholder="{{ __('index.enter-your-name') }}"
                                            required="">
                                        <span class="icon fa fa-user"></span>
                                    </div>

                                    <div class="form-group">
                                        <input type="tel" placeholder="{{ __('index.enter-your-phone-number') }}"
                                            required="">
                                        <span class="icon fas fa-phone"></span>
                                    </div>

                                    <div class="form-group">
                                        <input type="date" wire:model="selectedDate"
                                            min="{{ now()->format('Y-m-d') }}">
                                        <span class="icon fas fa-calendar"></span>
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
            </div>

        </div>
    </div>
</section>
<!-- End Schedule Section -->
