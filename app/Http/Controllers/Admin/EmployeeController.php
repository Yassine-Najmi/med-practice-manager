<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->search(new Request());
        // $data = Employee::latest()->paginate(10);
        // return view('admin.pages.employee.index', compact('data'));
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
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'job' => 'required',
            'work_time' => 'required',
            'salary' => 'required',
            'hiring_date' => 'required',
            'status' => 'required',

        ]);

        $data = new Employee();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->job = $request->job;
        $data->work_time = $request->work_time;
        $data->salary = $request->salary;
        $data->hiring_date = $request->hiring_date;
        $data->status = $request->status;

        $data->save();

        return redirect()->back()->with('success', 'Employee added successfully');
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
    //     //
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
            'job' => 'required',
            'work_time' => 'required',
            'salary' => 'required',
            'hiring_date' => 'required',
            'status' => 'required',
        ]);

        $data = Employee::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->job = $request->job;
        $data->work_time = $request->work_time;
        $data->salary = $request->salary;
        $data->hiring_date = $request->hiring_date;
        $data->status = $request->status;

        $data->save();

        return redirect()->back()->with('success', 'Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Employee::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Employee deleted successfully');
    }

    public function search(Request $request)
    {
        $search = $request->input('query');
        $query = Employee::query();
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%')
                ->orWhere('job', 'like', '%' . $search . '%')
                ->orWhere('work_time', 'like', '%' . $search . '%')
                ->orWhere('salary', 'like', '%' . $search . '%')
                ->orWhere('hiring_date', 'like', '%' . $search . '%')
                ->orWhere('status', 'like', '%' . $search . '%');
        }
        $data = $query->latest()->paginate(10);
        return view('admin.pages.employee.index', compact('data'));
    }
}
