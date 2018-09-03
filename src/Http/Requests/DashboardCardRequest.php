<?php

namespace AlexBowers\MultipleDashboard\Http\Requests;

use AlexBowers\MultipleDashboard\DashboardNova;
use Laravel\Nova\Http\Requests\NovaRequest;

class DashboardCardRequest extends NovaRequest
{
    /**
     * Get all of the possible cards for the request.
     *
     * @return \Illuminate\Support\Collection
     */
    public function availableCards($dashboard)
    {
        if ($dashboard == 'main') {
            return DashboardNova::availableDashboardCards($this);
        }

        return DashboardNova::availableDashboardCardsForDashboard($dashboard, $this);
    }
}
