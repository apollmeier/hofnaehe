<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Location extends Model
{
    protected $fillable = [
        'user_id',
        'location_type_id',
        'name',
        'street',
        'zipcode',
        'city',
        'country_id',
        'website',
        'email',
        'phone',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function locationType(): BelongsTo
    {
        return $this->belongsTo(LocationType::class, 'location_type_id');
    }
}
