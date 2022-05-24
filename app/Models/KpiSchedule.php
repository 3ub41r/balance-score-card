<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KpiSchedule extends Model
{
    protected $casts = [
        'key_in_starts_on' => 'date',
        'key_in_ends_on' => 'date',
        'approval_starts_on' => 'date',
        'approval_ends_on' => 'date',
    ];

    protected $guarded = [];
}
