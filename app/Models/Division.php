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
        return $this->belongsToMany(Kpi::class, 'division_kpis')
            ->withPivot('target', 'q1', 'q2', 'q3', 'q4')
            ->withTimestamps();
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

    public function kpi_status()
    {
        return $this->belongsTo(KpiStatus::class);
    }

    public function kpiStatusByQuarter($quarter)
    {
        return $this
            ->kpi_statuses()
            ->wherePivot('quarter', $quarter)
            ->latest()
            ->first();
    }

    public function submitKpis()
    {
        $this->updateKpiStatus(1);
    }
    
    public function markKpisReviewed()
    {
        $this->updateKpiStatus(2);
    }
    
    public function approveKpis()
    {
        $this->updateKpiStatus(3);
    }
    
    public function rejectKpis()
    {
        $this->updateKpiStatus(4);
    }

    public function updateKpiStatus($statusId)
    {
        $quarter = $this->getCurrentQuarter();

        $this
            ->kpi_statuses()
            ->attach($statusId, ['quarter' => $quarter->quarter]);

        $this->update(['kpi_status_id' => $statusId]);
    }

    private function getCurrentQuarter()
    {
        $today = now()->toDateString();
        return KpiSchedule::orderBy('key_in_starts_on')
            ->where('key_in_starts_on', '<=', $today)
            ->where('approval_ends_on', '>=', $today)
            ->first();
    }
}
