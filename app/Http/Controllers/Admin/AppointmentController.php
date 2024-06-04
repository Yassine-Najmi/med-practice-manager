<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\BusinessHour;
use App\Models\Patient;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Appointment::latest()->with('patient')->paginate(10);
        return view('admin.pages.appointment.Index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_appointment()
    {
        Carbon::setLocale('fr');
        $datePeriod = CarbonPeriod::create(now(), now()->addDays(6));
        $appointments = [];

        foreach ($datePeriod as $date) {
            $dayName = $date->isoFormat('dddd');
            $businessHour = BusinessHour::where('day', $dayName)->first();

            // $hours = $businessHour;

            if ($businessHour) {
                $businessHours = array_filter($businessHour->TimesPeriod);
                $currentAppointments = Appointment::where('date', $date->format('Y-m-d'))->pluck('time')->map(function ($time) {

                    return $time->isoFormat('HH:mm');
                })->toArray();
                $availableHours = array_diff($businessHours, $currentAppointments);
                $appointments[] = [
                    'day_name' => $dayName,
                    'date' => $date->isoFormat('DD MMM'),
                    'full_date' => $date->isoFormat('DD MMM YYYY'),
                    'available_hours' => $availableHours,
                    'booked_hours' => $currentAppointments,
                    'business_hours' => $businessHours,
                    'off' => $businessHour->off
                ];
            } else {
                // Handle the case where no business hours are found for the given day
                $appointments[] = [
                    'day_name' => $dayName,
                    'date' => $date->isoFormat('DD MMM'),
                    'available_hours' => [] // or some default value for sunday

                ];
            }
        }

        return view('landing.home-appointment', compact('appointments'));
    }


    public function confirm_appointment(Request $request)
    {
        $request->validate([
            'full_date' => 'required',
            'day_name' => 'required',
            'time' => 'required',
        ]);

        $appointments = [
            'full_date' => $request->full_date,
            'day_name' => $request->day_name,
            'time' => $request->time

        ];

        return view('landing.confirm-appointment', $appointments);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'full_date' => 'required',
            'time' => 'required|date_format:H:i',
        ]);

        $patient = Patient::where('phone', $request->phone)->first();
        if (!$patient) {
            $patient = new Patient();
            $patient->name = $request->name;
            $patient->email = $request->email;
            $patient->phone = $request->phone;
            $patient->save();
        }

        $appointment = new Appointment();
        $appointment->patient_id = $patient->id;
        $dateString = $request->full_date;
        $dateParts = explode(' ', $dateString);
        $appointment->date = $dateParts[2] . '-' . date('m', strtotime($dateParts[2])) . '-' . $dateParts[0];
        $appointment->time = $request->time;
        $appointment->save();

        return redirect()->back()->with([
            "success" => "Rendez-vous créé avec succès."
            // , veuillez vérifier votre e-mail
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment, string $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        $data = Patient::find($id);
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->cnie = $request->cnie;
        $data->date_of_birth = $request->date_of_birth;
        $data->save();

        return redirect()->back()->with('success', 'Patient updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->back()->with('success', 'Appointment deleted successfully');
    }
}
