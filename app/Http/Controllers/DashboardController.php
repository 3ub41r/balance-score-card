<?php

namespace App\Http\Controllers;

use App\Models\KpiSchedule;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $year = session('year') ?? now()->year;

        $keyInQuarter = KpiSchedule::whereRaw('now() between key_in_starts_on and key_in_ends_on')
            ->orderBy('key_in_starts_on')
            ->first();

        $approvalQuarter = KpiSchedule::whereRaw('now() between approval_starts_on and approval_ends_on')
            ->orderBy('approval_starts_on')
            ->first();

        $staff = $request->user()
            ->staff()
            ->with([
                'pic_divisions' => function ($query) use ($year) {
                    $query
                        ->where('year_implemented', $year)
                        ->with('department');
                },
                'approver_divisions' => function ($query) use ($year) {
                    $query
                        ->where('year_implemented', $year)
                        ->with('department');
                },
            ])
            ->first();

        return view('dashboard', compact('staff', 'keyInQuarter', 'approvalQuarter'));
    }
}
