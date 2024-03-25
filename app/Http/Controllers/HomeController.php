<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function AddAppointement(Request $request)
    {
        $this->validate($request,[
        ]);

        $patient = Patient::firstOrCreate(
            ['name' => request('name')],
            ['email' =>  request('email')]
        );

        Appointment::create([
            'patient_id' => $patient->id,
            'date' => request('date'),
            'time' => request('time'),
        ]);

        return redirect()->back()->with([
            "success" => "appoitement create with success , please check your Email"
        ]);

    }
}
