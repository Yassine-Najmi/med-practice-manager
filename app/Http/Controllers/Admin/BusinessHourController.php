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
        $requestData = $request->all()['data'];
        $data = [];
        foreach ($requestData as $dayData) {
            // $off = isset($dayData['off']) ? $dayData['off'] : false;
            $off = $request->has("data.{$dayData['day']}.off") ? true : false;
            $data[] = [
                'day' => $dayData['day'],
                'from' => $dayData['from'],
                'to' => $dayData['to'],
                'step' => $dayData['step'],
                'off' => $off
            ];
        }
        BusinessHour::query()->upsert($data, ['day']);
        return redirect()->back()->with('success', 'Business hours updated successfully');
    }
}
