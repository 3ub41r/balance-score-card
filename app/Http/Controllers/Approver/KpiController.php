<?php

namespace App\Http\Controllers\Approver;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\KpiSchedule;
use App\Services\KpiScheduleService;
use Illuminate\Http\Request;

class KpiController extends Controller
{
    public function index(Request $request, KpiScheduleService $kpiScheduleService)
    {
        $year = $request->session()->get('year') ?? now()->year;

        // Get current quarter
        $currentQuarter = $kpiScheduleService->getCurrentApprovalQuarter();
        $staff = $request->user()->staff;

        $divisions = $staff->approver_divisions()
            // ->has('kpi_statuses')
            ->with('department', 'kpis')
            ->where('year_implemented', $year)
            ->get();

        return view('approver/kpis/index', compact('divisions', 'currentQuarter'));
    }

    public function approve(Division $division)
    {
        $division->markKpisReviewed();
        return redirect()->back()->with('message', 'KPIs approved.');
    }
}
