<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CountdownRate;
use Illuminate\Auth\Access\HandlesAuthorization;

class CountdownRatePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the countdownRate can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the countdownRate can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CountdownRate  $model
     * @return mixed
     */
    public function view(User $user, CountdownRate $model)
    {
        return true;
    }

    /**
     * Determine whether the countdownRate can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the countdownRate can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CountdownRate  $model
     * @return mixed
     */
    public function update(User $user, CountdownRate $model)
    {
        return true;
    }

    /**
     * Determine whether the countdownRate can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CountdownRate  $model
     * @return mixed
     */
    public function delete(User $user, CountdownRate $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CountdownRate  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the countdownRate can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CountdownRate  $model
     * @return mixed
     */
    public function restore(User $user, CountdownRate $model)
    {
        return false;
    }

    /**
     * Determine whether the countdownRate can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CountdownRate  $model
     * @return mixed
     */
    public function forceDelete(User $user, CountdownRate $model)
    {
        return false;
    }
}
