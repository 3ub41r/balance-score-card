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
}
