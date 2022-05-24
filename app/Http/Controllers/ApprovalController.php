<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Services\KpiScheduleService;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    protected $kpiScheduleService;

    public function __construct(KpiScheduleService $kpiScheduleService)
    {
        $this->kpiScheduleService = $kpiScheduleService;
    }

    public function index(Request $request)
    {
        $year = $request->session()->get('year') ?? now()->year;
        $currentQuarter = $this->kpiScheduleService->getCurrentQuarter();

        $divisions = Division::where('year_implemented', $year)
            ->has('kpis')
            ->with([
                'kpis',
                'kpi_status',
                'kpis.kpi_performances',
            ])
            ->get();

        // return $divisions;

        return view('approval/index', compact('divisions', 'currentQuarter'));
    }
}
