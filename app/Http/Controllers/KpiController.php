<?php

namespace App\Http\Controllers;

use App\Models\Kpi;
use App\Models\Perspective;
use Illuminate\Http\Request;

class KpiController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->session()->get('year') ?? now()->year;
        $perspectives = Perspective::where('year_implemented', $year)
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
