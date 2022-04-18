<?php

namespace App\Http\Controllers\Approver;

use App\Http\Controllers\Controller;
use App\Models\Division;
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

        $divisions = $staff->approver_divisions()
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
