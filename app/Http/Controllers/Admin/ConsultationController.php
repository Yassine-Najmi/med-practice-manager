<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use App\Models\Patient;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Patient::all();
        $data = Consultation::latest()->with('patient')->paginate(15);
        return view('admin.pages.consultation.Index', compact('data', 'items'));
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
        $request->validate([
            // 'patient_id' => 'required',
            // 'antécédents' => 'required',
            // 'diagnostique' => 'required',
            // 'traitment' => 'required',
            'motif' => 'required | numeric',
        ]);


        $data = new Consultation();
        $data->patient_id =  $request->patient;
        $data->situation = "En cours";
        $data->antécédents = $request->antécédents;
        $data->diagnostique = $request->diagnostique;
        $data->traitment = $request->traitment;
        $data->motif = $request->motif;
        $data->save();

        return redirect()->back()->with('success', 'Consultation added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'motif' => 'required | numeric',
        ]);

        $data = Consultation::find($id);

        $data->patient_id =  $request->patient;
        $data->situation = "En cours";
        $data->antécédents = $request->antécédents;
        $data->diagnostique = $request->diagnostique;
        $data->traitment = $request->traitment;
        $data->motif = $request->motif;

        $data->save();

        return redirect()->back()->with('success', 'Consultation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Consultation::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Consultation deleted successfully');
    }
}
