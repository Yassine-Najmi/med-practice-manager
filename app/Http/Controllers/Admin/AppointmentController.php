<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Appointment::latest()->with('patient')->paginate(15);
        return view('admin.pages.appointments.Index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!$request->has('patient_id')) {
            $patient = new Patient();
            $patient->name = $request->name;
            $patient->email = $request->email;
            $patient->phone = $request->phone;
            $patient->save();
        }

        $appointment = new Appointment();
        $appointment->patient_id = $patient->id;
        $appointment->date = $request->date;
        $appointment->time = $request->patient_id ? $request->patient_id : $patient->id;
        $appointment->save();

        return redirect()->back()->with([
            "success" => "appoitement create with success , please check your Email"
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
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
