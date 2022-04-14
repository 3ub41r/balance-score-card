<?php

namespace App\Http\Controllers;

use App\Models\Perspective;
use App\Models\PerspectiveCategory;
use Illuminate\Http\Request;

class PerspectiveController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->session()->get('year') ?? now()->year;
        $perspectives = Perspective::where('year_implemented', $year)
            ->with('perspective_category')
            ->orderBy('code')
            ->get();

        return view('perspectives/index', compact('perspectives'));
    }

    public function create()
    {
        $perspectiveCategories = PerspectiveCategory::orderBy('name')->get();
        $perspective = new Perspective();

        return view('perspectives/create', compact('perspective', 'perspectiveCategories'));
    }

    public function store(Request $request)
    {
        // Cara mudah
        Perspective::create($request->all());

        // Suka taip
        // Perspective::create([
        //     'code' => $request->input('code'),
        //     'name' => $request->input('name'),
        //     'year_implemented' => $request->input('year_implemented'),
        //     'perspective_category_id' => $request->input('perspective_category_id'),
        // ]);

        return redirect()->route('perspectives.index');
    }

    public function show(Perspective $perspective)
    {
        //
    }

    public function edit(Perspective $perspective)
    {
        $perspectiveCategories = PerspectiveCategory::orderBy('name')->get();
        return view('perspectives/create', compact('perspective', 'perspectiveCategories'));
    }

    public function update(Request $request, Perspective $perspective)
    {
        $perspective->update($request->all());
        return redirect()->route('perspectives.index');
    }

    public function destroy(Perspective $perspective)
    {
        $perspective->delete();
        return redirect()->route('perspectives.index');
    }
}
