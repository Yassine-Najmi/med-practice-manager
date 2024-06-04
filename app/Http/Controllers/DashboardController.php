<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $tomorrow = $today->copy()->addDay();
        $startOfWeek = $today->copy()->startOfWeek();
        $endOfWeek = $today->copy()->endOfWeek();
        $startOfMonth = $today->copy()->startOfMonth();
        $endOfMonth = $today->copy()->endOfMonth();

        $todayCount = Appointment::whereDate('date', $today)->count();
        $tomorrowCount = Appointment::whereDate('date', $tomorrow)->count();
        $weekCount = Appointment::whereBetween('date', [$startOfWeek, $endOfWeek])->count();
        $monthCount = Appointment::whereBetween('date', [$startOfMonth, $endOfMonth])->count();

        $appointmentsToday = Appointment::whereDate('date', $today)
            ->orderBy('time', 'asc')
            ->get();
        $appointmentsWeek = Appointment::whereBetween('date', [$startOfWeek, $endOfWeek])
            ->orderBy('date', 'asc')
            ->orderBy('time', 'asc')
            ->paginate(10);

        // dd($appointmentsToday);

        return view('admin.index', compact('todayCount', 'tomorrowCount', 'weekCount', 'monthCount', 'appointmentsToday', 'appointmentsWeek', 'startOfWeek', 'endOfWeek'));
    }
}
