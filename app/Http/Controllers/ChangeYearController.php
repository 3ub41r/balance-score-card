<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangeYearController extends Controller
{
    public function __invoke(Request $request, $year)
    {
        $request->session()->put('year', $year);
        return redirect()->back();
    }
}
