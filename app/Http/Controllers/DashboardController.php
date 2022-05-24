<?php

namespace App\Http\Controllers;

use App\Models\KpiSchedule;
use App\Services\KpiScheduleService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request, KpiScheduleService $kpiScheduleService)
    {
        $year = session('year') ?? now()->year;
        $keyInQuarter = $kpiScheduleService->getCurrentKeyInQuarter();
        $approvalQuarter = $kpiScheduleService->getCurrentApprovalQuarter();

        $staff = $request->user()
            ->staff()
            ->with([
                'pic_divisions' => function ($query) use ($year, $keyInQuarter) {
                    $query
                        ->when($keyInQuarter, function ($query, $keyInQuarter) {
                            return $query->whereHas('kpis', function ($query) use ($keyInQuarter) {
                                $query->where('q' . $keyInQuarter->quarter, true);
                            });
                        })
                        // ->whereDoesntHave('kpi_statuses', function ($query) {
                        //     $query->where('slug', 'submitted');
                        // })
                        ->where('year_implemented', $year)
                        ->with('department');
                },
                'approver_divisions' => function ($query) use ($year, $approvalQuarter) {
                    $query
                        ->when($approvalQuarter, function ($query, $approvalQuarter) {
                            return $query->whereHas('kpis', function ($query) use ($approvalQuarter) {
                                $query->where('q' . $approvalQuarter->quarter, true);
                            });
                        })
                        // ->whereDoesntHave('kpi_statuses', function ($query) {
                        //     $query->whereIn('slug', ['approved', 'reviewed']);
                        // })
                        ->where('year_implemented', $year)
                        ->with('department');
                },
            ])
            ->first();

        return view('dashboard', compact('staff', 'keyInQuarter', 'approvalQuarter'));
    }
}
