<?php

namespace App\Livewire\Landing;

use App\Models\Appointment as ModelsAppointment;
use App\Models\Time;
use App\Models\Week;
use Carbon\Carbon;
use Livewire\Component;

class Appointment extends Component
{
    public $selectedDate;
    public $selectedTime;
    public function render()
    {
        return view('livewire.landing.appointment', [
            'availableTimes' => $this->getAvailableTimes()
        ]);
    }

    public function getAvailableTimes()
    {
        $this->selectedDate = Carbon::now()->toDateString();

        $availableTimes = [];

        if ($this->selectedDate) {
            $selectedDayOfWeek = Carbon::parse($this->selectedDate)->dayOfWeek;

            $weekid = Week::where('id', $selectedDayOfWeek)->value("id");

            $allTimes = Time::where('week_id', $weekid)->pluck('time');

            $selectedDate = Carbon::parse($this->selectedDate)->format('Y-m-d');

            $bookedTimes = ModelsAppointment::where('date', $selectedDate)->pluck('time');

            foreach ($allTimes as $time) {
                if (!$bookedTimes->contains($time)) {
                    $availableTimes[] = $time;
                }
            }
        }
        return $availableTimes;
    }
}
