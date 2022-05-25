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
        $currentQuarter = $this->kpiScheduleService->getCurrentApprovalQuarter();

        $divisions = Division::where('year_implemented', $year)
            ->has('kpis')
            ->with([
                'kpis',
                'kpi_status',
                'kpis.kpi_performances',
            ])
            ->get();

        return view('approval/index', compact('divisions', 'currentQuarter'));
    }

    public function approve(Division $division)
    {
        $division->approveKpis();
        
        return back()->with('message', "KPIs for {$division->department->name} approved.");
    }
    
    public function reject(Division $division)
    {
        $division->rejectKpis();

        return back()->with('message', "KPIs for {$division->department->name} rejected.");
    }
}
