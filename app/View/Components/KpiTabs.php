<?php

namespace App\View\Components;

use Illuminate\View\Component;

class KpiTabs extends Component
{
    public $links;

    public function __construct()
    {
        $this->links = [
            'Divisions' => route('divisions.index'),
            'Schedule' => route('schedules.index'),
            'Perspectives' => route('perspectives.index'),
            'KPI' => route('kpis.index'),
            'Approvals' => route('approval.index'),
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.kpi-tabs');
    }
}
