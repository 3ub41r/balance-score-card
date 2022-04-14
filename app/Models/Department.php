<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function divisions()
    {
        return $this->hasMany(Division::class);
    }

    public function current_division()
    {
        $year = session('year') ?? now()->year;
        
        return $this
            ->hasOne(Division::class)
            ->where('year_implemented', $year);
    }
}
