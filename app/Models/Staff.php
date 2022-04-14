<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    public function pic_divisions()
    {
        return $this->hasMany(Division::class, 'pic_staff_id');
    }

    public function approver_divisions()
    {
        return $this->hasMany(Division::class, 'approver_staff_id');
    }
}
