<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function kpis()
    {
        return $this->belongsToMany(Kpi::class, 'division_kpis')->withPivot('target');
    }

    public function kpi_performances()
    {
        return $this->hasMany(KpiPerformance::class);
    }

    public function kpi_statuses()
    {
        return $this
            ->belongsToMany(KpiStatus::class, 'division_kpi_statuses')
            ->withPivot('quarter')
            ->withTimestamps();
    }

    public function kpiStatusByQuarter($quarter)
    {
        return $this
            ->kpi_statuses()
            ->wherePivot('quarter', $quarter)
            ->first();
    }

    public function submitKpis()
    {
        $quarter = KpiSchedule::whereRaw('now() between key_in_starts_on and key_in_ends_on')
            ->orderBy('key_in_starts_on')
            ->first();

        $this
            ->kpi_statuses()
            ->attach(1, ['quarter' => $quarter->quarter]);
    }
}
