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
        $data = Appointment::latest()->with('patient')->paginate(10);
        return view('admin.pages.appointment.Index', compact('data'));
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
    public function update(Request $request, Appointment $appointment, string $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            'cnie' => 'required',
            'date_of_birth' => 'required',
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
        //
    }
}
