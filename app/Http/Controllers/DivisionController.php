<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Division;
use App\Models\Staff;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $departments = Department::orderBy('name')->get();
        $staff = Staff::orderBy('name')->get();

        return view('divisions/index', compact('departments', 'staff'));
    }

    public function create()
    {
        $division = new Division();
        $staff = Staff::orderBy('name')->get();

        return view('divisions/create', compact('division', 'staff'));
    }

    public function store(Request $request)
    {
        $year = $request->session()->get('year') ?? now()->year;

        // Loop departments
        foreach (Department::all() as $department) {
            // Insert into divisions
            $department->divisions()->updateOrCreate([
                'year_implemented' => $year,
            ], [
                'pic_staff_id' => $request->input('pic_staff.' . $department->id),
                'approver_staff_id' => $request->input('approver_staff.' . $department->id),
            ]);           
        }

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
