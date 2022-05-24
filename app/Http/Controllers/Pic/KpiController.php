<?php

namespace App\Http\Controllers\Pic;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\KpiPerformance;
use App\Models\KpiSchedule;
use App\Services\KpiScheduleService;
use Illuminate\Http\Request;

class KpiController extends Controller
{
    public function index(Request $request, KpiScheduleService $kpiScheduleService)
    {
        $year = $request->session()->get('year') ?? now()->year;

        // Get current quarter
        $currentQuarter = $kpiScheduleService->getCurrentKeyInQuarter();
        $staff = $request->user()->staff;

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

    public function submit(Division $division)
    {
        $division->submitKpis();
        return redirect()->back()->with('message', 'KPIs submitted.');
    }
}
