<?php

namespace App\Http\Controllers\Approver;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\KpiSchedule;
use Illuminate\Http\Request;

class KpiController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->session()->get('year') ?? now()->year;

        // Get current quarter
        $currentQuarter = KpiSchedule::whereRaw('now() between approval_starts_on and approval_ends_on')
            ->orderBy('approval_starts_on')
            ->first();

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
