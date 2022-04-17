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
}
