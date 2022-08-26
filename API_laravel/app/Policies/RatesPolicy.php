<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Rates;
use Illuminate\Auth\Access\HandlesAuthorization;

class RatesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the rates can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the rates can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Rates  $model
     * @return mixed
     */
    public function view(User $user, Rates $model)
    {
        return true;
    }

    /**
     * Determine whether the rates can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the rates can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Rates  $model
     * @return mixed
     */
    public function update(User $user, Rates $model)
    {
        return true;
    }

    /**
     * Determine whether the rates can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Rates  $model
     * @return mixed
     */
    public function delete(User $user, Rates $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Rates  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the rates can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Rates  $model
     * @return mixed
     */
    public function restore(User $user, Rates $model)
    {
        return false;
    }

    /**
     * Determine whether the rates can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Rates  $model
     * @return mixed
     */
    public function forceDelete(User $user, Rates $model)
    {
        return false;
    }
}
