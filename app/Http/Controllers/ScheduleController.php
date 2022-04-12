<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index($year = null)
    {
        // Display schedule form
        return view('schedules/index', compact('year'));
    }

    public function store(Request $request, $year)
    {
        return $request->input('key_in_ends');
        return 'submit schedule';
    }
}
