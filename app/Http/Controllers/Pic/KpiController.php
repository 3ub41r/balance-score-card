<?php

namespace App\Http\Controllers\Pic;

use App\Http\Controllers\Controller;
use App\Models\KpiPerformance;
use App\Models\KpiSchedule;
use App\Models\Staff;
use Illuminate\Http\Request;

class KpiController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->session()->get('year') ?? now()->year;

        // Get current quarter
        $currentQuarter = KpiSchedule::whereRaw('now() between key_in_starts_on and key_in_ends_on')
            ->orderBy('key_in_starts_on')
            ->first();

        // Dummy
        $staff = Staff::find(1);

        $divisions = $staff->pic_divisions()
            ->with('department', 'kpis')
            ->where('year_implemented', $year)
            ->get();

        return view('pic/kpis/index', compact('divisions', 'currentQuarter'));
    }

    public function store(Request $request)
    {
        foreach ($request->input('achievements') as $divisionId => $kpis) {
            foreach ($kpis as $kpiId => $achievements) {
                foreach ($achievements as $quarter => $achievement) {
                    if (!$achievement) {
                        continue;
                    }

                    // Insert into kpi_performances
                    KpiPerformance::updateOrCreate([
                        'quarter' => $quarter,
                        'kpi_id' => $kpiId,
                        'division_id' => $divisionId,
                    ], [
                        'achievement' => $achievement,
                    ]);
                }
            }
        }

        return redirect()->route('pic.kpis.index')->with('message', 'KPI updated.');
    }
}
