<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessHour;
use Illuminate\Http\Request;

class BusinessHourController extends Controller
{

    public function index()
    {
        $businessHours = BusinessHour::all();
        return view('admin.pages.businessHour.index', compact('businessHours'));
    }

    public function update(Request $request)
    {
        $data = array_values($request->all()['businessHours']);
        BusinessHour::query()->upsert($data, ['day']);
        return redirect()->back()->with('success', 'Business hours updated successfully');
    }
}
