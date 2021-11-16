<?php

namespace App\Traits;
trait HasFilter {

    /**
     * @param $query
     * @param array $filters
     */
    public function scopeFilter($query, array $filters)
    {
        $query->when(($filters["from"] ?? null && $filters["to"] ?? null) ?? null, function ($query) use ($filters) {
            $query->whereDate('created_at', '>=', $filters["from"])
                ->whereDate('created_at', '<=', $filters["to"])
                ->orderBy("created_at", "desc");
        });

    }

}
