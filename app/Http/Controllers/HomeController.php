<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointementMail;
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
        $mailData = [
            'nom' => $patient->name,
        ];

        Mail::to($patient->email)->send(new AppointementMail($mailData));

        return redirect()->back()->with([
            "success" => "appoitement create with success , please check your Email"
        ]);

    }
}
