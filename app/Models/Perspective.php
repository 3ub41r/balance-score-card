<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perspective extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function perspective_category()
    {
        return $this->belongsTo(PerspectiveCategory::class);
    }

    public function kpis()
    {
        return $this->hasMany(Kpi::class);
    }
}
