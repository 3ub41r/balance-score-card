<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Kpi;
use App\Models\Perspective;
use Illuminate\Http\Request;

class KpiController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->session()->get('year') ?? now()->year;

        $perspectives = Perspective::where('year_implemented', $year)
            ->with([
                'kpis',
                'kpis.divisions',
                'kpis.divisions.department',
            ])
            ->orderBy('code')
            ->get();

        return view('kpis/index', compact('perspectives'));
    }

    public function create(Request $request)
    {
        $year = $request->session()->get('year', now()->year);

        $perspectives = Perspective::orderBy('code')
            ->where('year_implemented', $year)
            ->get();
        $divisions = Division::where('year_implemented', $year)->get();
        $kpi = new Kpi();

        return view('kpis/create', compact('perspectives', 'kpi', 'divisions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'od' => 'required',
            'divisions' => 'required',
            // 'perspective_id' => 'required',
        ]);

        $divisionTargets = [];
        $totalTarget = 0;

        foreach ($request->input('divisions') as $division) {
            // Assign division
            $target = $request->input('targets.' . $division);
            $totalTarget += $target;

            // Loop quarters
            $quarterReportings = [];

            for ($quarter = 1; $quarter <= 4; $quarter++) {
                $quarterReportings['q' . $quarter] = $request->has("quarters.{$division}.{$quarter}");
            }

            // Append
            $divisionTargets[$division] = [
                'target' => $target,
            ] + $quarterReportings;
        }

        $kpiData = $request->except([
            'divisions',
            'targets',
            'quarters',
        ]) + ['target' => $totalTarget];

        $kpi = Kpi::create($kpiData);
        $kpi->divisions()->sync($divisionTargets);

        return redirect()->route('kpis.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Request $request, Kpi $kpi)
    {
        $year = $request->session()->get('year') ?? now()->year;

        $perspectives = Perspective::orderBy('code')
            ->where('year_implemented', $year)
            ->get();
        $divisions = Division::where('year_implemented', $year)->get();

        return view('kpis/create', compact('perspectives', 'kpi', 'divisions'));
    }

    public function update(Request $request, Kpi $kpi)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'od' => 'required',
            'divisions' => 'required',
            // 'perspective_id' => 'required',
        ]);

        $divisionTargets = [];
        $totalTarget = 0;

        // Loop checked divisions
        foreach ($request->input('divisions') as $division) {
            // Assign division
            $target = $request->input('targets.' . $division);
            $totalTarget += $target;

            // Loop quarters
            $quarterReportings = [];

            for ($quarter = 1; $quarter <= 4; $quarter++) {
                $quarterReportings['q' . $quarter] = $request->has("quarters.{$division}.{$quarter}");
            }

            // Append
            $divisionTargets[$division] = [
                'target' => $target,
            ] + $quarterReportings;
        }

        $kpi->divisions()->sync($divisionTargets);
        
        $kpiData = $request->except([
            'divisions',
            'targets',
            'quarters',
        ]) + ['target' => $totalTarget];
        $kpi->update($kpiData);

        return redirect()
            ->route('kpis.index')
            ->with('message', 'KPI updated.');
    }

    public function destroy(Kpi $kpi)
    {
        $kpi->delete();
        return redirect()->route('kpis.index');
    }
}
