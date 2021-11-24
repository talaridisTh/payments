<?php

namespace App\Traits;

trait HasGlobalCustomEloquent {

    /**
     * @param $query
     * @param $relation
     * @param $callback
     * @return mixed
     */
    public function scopeWithWhereHasCallback($query, $relation, $callback)
    {
        return $query->whereHas($relation, $callback)
            ->with($relation);
    }

    /**
     * @param $query
     * @param $relation
     * @return mixed
     */
    public function scopeWithWhereHas($query, $relation)
    {
        return $query->whereHas($relation)
            ->with($relation);
    }

}
