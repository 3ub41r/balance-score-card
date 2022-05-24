<?php

namespace App\Services;

use App\Models\KpiSchedule;

class KpiScheduleService
{
    public function getCurrentKeyInQuarter()
    {
        $today = now()->toDateString();

        return KpiSchedule::orderBy('key_in_starts_on')
            ->where('key_in_starts_on', '<=', $today)
            ->where('key_in_ends_on', '>=', $today)
            ->first();
    }

    public function getCurrentApprovalQuarter()
    {
        $today = now()->toDateString();

        return KpiSchedule::orderBy('approval_starts_on')
            ->where('approval_starts_on', '<=', $today)
            ->where('approval_ends_on', '>=', $today)
            ->first();
    }
}