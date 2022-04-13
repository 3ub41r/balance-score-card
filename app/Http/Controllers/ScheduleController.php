<?php

namespace App\Http\Controllers;

use App\Models\KpiSchedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index($year = null)
    {
        $year = $year ?? now()->year;

        // Get schedules for year
        $schedules = KpiSchedule::where('year_implemented', $year)->get();

        // Display schedule form
        return view('schedules/index', compact('year', 'schedules'));
    }

    public function store(Request $request, $year)
    {
        // Loop quarters
        for ($quarter = 1; $quarter <= 4; $quarter++) {
            if (
                !$request->input('key_in_starts.' . $quarter)
                || !$request->input('key_in_ends.' . $quarter)
                || !$request->input('approval_starts.' . $quarter)
                || !$request->input('approval_ends.' . $quarter)
            ) {
                continue;
            }
            
            KpiSchedule::updateOrCreate([
                'year_implemented' => $year,
                'quarter' => $quarter,
            ],[
                'key_in_starts_on' => $request->input('key_in_starts.' . $quarter),
                'key_in_ends_on' => $request->input('key_in_ends.' . $quarter),
                'approval_starts_on' => $request->input('approval_starts.' . $quarter),
                'approval_ends_on' => $request->input('approval_ends.' . $quarter),
            ]);
        }

        return redirect()->route('schedules.index', $year);
    }
}
