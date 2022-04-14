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
            ->has('kpis')
            ->with('kpis')
            ->orderBy('code')
            ->get();

        return view('kpis/index', compact('perspectives'));
    }

    public function create()
    {
        $perspectives = Perspective::orderBy('code')->get();
        $kpi = new Kpi();

        return view('kpis/create', compact('perspectives', 'kpi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'od' => 'required',
            'target' => 'required|numeric',
            // 'perspective_id' => 'required',
        ]);

        Kpi::create($request->all());

        return redirect()->route('kpis.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Request $request, Kpi $kpi)
    {
        $year = $request->session()->get('year') ?? now()->year;
        $perspectives = Perspective::orderBy('code')->get();
        $divisions = Division::where('year_implemented', $year)->get();

        return view('kpis/create', compact('perspectives', 'kpi', 'divisions'));
    }

    public function update(Request $request, Kpi $kpi)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'od' => 'required',
            'target' => 'required|numeric',
            // 'perspective_id' => 'required',
        ]);

        $kpi->update($request->except('divisions'));

        // Assign division
        $kpi->divisions()->sync($request->input('divisions'));

        return redirect()->route('kpis.index');
    }

    public function destroy(Kpi $kpi)
    {
        $kpi->delete();
        return redirect()->route('kpis.index');
    }
}
