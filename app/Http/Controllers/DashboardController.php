<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $year = session('year') ?? now()->year;

        $staff = $request->user()
            ->staff()
            ->with([
                'pic_divisions' => function ($query) use ($year) {
                    $query
                        ->where('year_implemented', $year)
                        ->with([
                            'kpis' => function ($query) use ($year) {
                                $query->whereHas('perspective', function ($query) use ($year) {
                                    $query->where('year_implemented', $year);
                                });
                            },
                            'department',
                        ]);
                },
                'approver_divisions' => function ($query) use ($year) {
                    $query
                        ->where('year_implemented', $year)
                        ->with([
                            'kpis' => function ($query) use ($year) {
                                $query->whereHas('perspective', function ($query) use ($year) {
                                    $query->where('year_implemented', $year);
                                });
                            },
                            'department',
                        ]);
                },
            ])
            ->first();

        // return $staff;
        return view('dashboard', compact('staff'));
    }
}
