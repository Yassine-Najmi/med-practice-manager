<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Fournisseur::latest()->paginate(10);
        return view('admin.pages.fournisseur.Index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {

    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $data = new Fournisseur();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->adresse = $request->address;
        $data->save();

        return redirect()->back()->with('success', 'Fournisseur added successfully');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $data = Fournisseur::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->adresse = $request->address;
        $data->save();

        return redirect()->back()->with('success', 'Fournisseur updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Fournisseur::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Fournisseur deleted successfully');
    }
}
