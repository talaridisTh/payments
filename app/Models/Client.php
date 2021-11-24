<?php

namespace App\Models;

use App\Traits\HasFilter;
use App\Traits\HasGlobalCustomEloquent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;

class Client extends Authenticatable {

    use HasApiTokens, HasFactory, Notifiable, HasFilter,HasGlobalCustomEloquent;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lastPayment(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Payment::class)->latest();
    }

    /**
     * @param $query
     * @param int $days
     */
    public function scopeGetPayment($query, $days = 30)
    {

        $query->whereHas('payments', function ($query) use ($days) {
            return $query->whereDate('created_at', '>=', Carbon::now()->subDays($days));
        })->with(['payments' => function ($subQuery) {
            $subQuery->orderBy('created_at', 'desc');
        }]);

    }

    public function getFullNameAttribute(): string
    {
        return $this->name . " " . $this->surname;
    }

}
