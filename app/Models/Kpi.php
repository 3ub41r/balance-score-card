<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kpi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function divisions()
    {
        return $this->belongsToMany(Division::class, 'division_kpis')->withPivot('target');
    }
}
