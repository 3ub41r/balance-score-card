<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisionKpiStatus extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kpi_status()
    {
        return $this->belongsTo(KpiStatus::class);
    }

    public function scopeByQuarter($query, $quarter)
    {
        return $query->where('quarter', $quarter);
    }
}
