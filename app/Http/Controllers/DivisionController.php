<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Staff;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::orderBy('name')->get();

        return view('divisions/index', compact('divisions'));
    }

    public function create()
    {
        $division = new Division();
        $staff = Staff::orderBy('name')->get();

        return view('divisions/create', compact('division', 'staff'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pic_staff_id' => 'required',
            'approver_staff_id' => 'required',
            'year_implemented' => 'required',
        ]);

        Division::create($request->all());

        return redirect()->route('divisions.index');
    }

    public function show(Division $division)
    {
        //
    }

    public function edit(Division $division)
    {
        $staff = Staff::orderBy('name')->get();

        return view('divisions/create', compact('division', 'staff'));
    }

    public function update(Request $request, Division $division)
    {
        $request->validate([
            'name' => 'required',
            'pic_staff_id' => 'required',
            'approver_staff_id' => 'required',
            'year_implemented' => 'required',
        ]);

        $division->update($request->all());

        return redirect()->route('divisions.index');
    }

    public function destroy(Division $division)
    {
        $division->delete();
        return redirect()->route('divisions.index');
    }
}
