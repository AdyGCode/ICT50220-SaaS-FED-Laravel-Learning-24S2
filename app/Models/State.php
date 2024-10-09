<?php

namespace App\Models;

use Database\Factories\StateFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class State extends Model
{
    /** @use HasFactory<StateFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'country_id',
        'state_code',
        'country_name',
        'country_code',
        'type',
        'latitude',
        'longitude',
    ];

    /**
     * State belongs to Country Relationship
     *
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

}
