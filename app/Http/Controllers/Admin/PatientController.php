<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Patient::latest()->paginate(5);
        return view('admin.pages.patient.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            'cnie' => 'required',
            'date_of_birth' => 'required',
        ]);

        $data = new Patient();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->cnie = $request->cnie;
        $data->date_of_birth = $request->date_of_birth;
        $data->save();

        return redirect()->back()->with('success', 'Patient added successfully');
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
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
    public function destroy(string $id)
    {
        $data = Patient::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Patient deleted successfully');
    }
}
