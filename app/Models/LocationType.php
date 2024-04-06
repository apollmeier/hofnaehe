<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LocationType extends Model
{
    public function locations(): HasMany
    {
        return $this->hasMany(Location::class, 'location_type_id');
    }
}
