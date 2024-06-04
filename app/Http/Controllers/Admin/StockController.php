<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fournisseur;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->search(new Request());
        // $items = Fournisseur::all();
        // $data = Stock::latest()->paginate(10);
        // return view('admin.pages.stock.index', compact('data', 'items'));
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
            // 'quantity' => 'required',
            // 'price' => 'required',
            // 'category' => 'required',
            'fournisseur_id' => 'required',
        ]);


        $data = new Stock();
        $data->name = $request->name;
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        $data->category = $request->category;
        $data->fournisseur_id = $request->fournisseur_id;
        $data->save();

        return redirect()->back()->with('success', 'Stock added successfully');
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
            'quantity' => 'required',
            'price' => 'required',
            // 'category' => 'required',
            'fournisseur_id' => 'required',
        ]);


        $data = Stock::find($id);
        $data->name = $request->name;
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        $data->category = $request->category;
        $data->fournisseur_id = $request->fournisseur_id;
        $data->save();


        return redirect()->back()->with('success', 'Stock updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Stock::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Stock deleted successfully');
    }

    public function search(Request $request)
    {
        $search = $request->input('query');
        $query = Stock::query();
        $items = Fournisseur::all();
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('quantity', 'like', '%' . $search . '%')
                ->orWhere('price', 'like', '%' . $search . '%')
                ->orWhere('category', 'like', '%' . $search . '%');
        }
        $data = $query->latest()->paginate(10);
        return view('admin.pages.stock.index', compact('data', 'items'));
    }
}
