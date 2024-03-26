<?php

namespace App\Policies;

use App\Models\Location;
use App\Models\User;

class LocationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if ($user->can('view any locations')) {
            return true;
        }

        if ($user->can('view own locations')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Location $location): bool
    {
        if ($user->can('view any locations')) {
            return true;
        }

        if ($user->can('view own locations')) {
            return $user->id === $location->user->id;
        }

        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Location $location): bool
    {
        if ($user->can('update any locations')) {
            return true;
        }

        if ($user->can('update own locations')) {
            return $user->id === $location->user->id;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Location $location): bool
    {
        if ($user->can('delete any locations')) {
            return true;
        }

        if ($user->can('delete own locations')) {
            return $user->id === $location->user->id;
        }

        return false;
    }
}
