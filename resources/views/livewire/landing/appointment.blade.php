<div class="">
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
                            <input type="text" name="username" placeholder="{{ __('index.enter-your-name') }}">
                            <span class="icon fa fa-user"></span>
                        </div>

                        <div class="form-group">
                            <input type="tel" name="phone"
                                placeholder="{{ __('index.enter-your-phone-number') }}">
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
