<?php

namespace App\Models;

use App\Traits\HasFilter;
use App\Traits\HasGlobalCustomEloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Payment extends Model {

    use HasFactory, HasFilter, HasGlobalCustomEloquent;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * @return string
     */
    public function getClientFullNameAttribute(): string
    {

        return $this->client->name . " " . $this->client->surname;
    }

}