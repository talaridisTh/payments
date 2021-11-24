<?php

namespace App\Traits;
trait HasFilter {

    /**
     * @param $query
     * @param array $filters
     */
    public function scopeFilter($query, array $filters)
    {
        $filterExist = ($filters["from"] && $filters["to"]);
        $query->when($filterExist ?? null, function ($query) use ($filters) {
            $query->whereDate('created_at', '>=', $filters["from"])
                ->whereDate('created_at', '<=', $filters["to"]);
        });
    }

}
