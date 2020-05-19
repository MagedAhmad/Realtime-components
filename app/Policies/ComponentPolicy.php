<?php

namespace App\Policies;

use App\Component;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ComponentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Component  $component
     * @return mixed
     */
    public function view(User $user, Component $component)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Component  $component
     * @return mixed
     */
    public function update(User $user, Component $component)
    {
        return $user->id === $component->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Component  $component
     * @return mixed
     */
    public function delete(User $user, Component $component)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Component  $component
     * @return mixed
     */
    public function restore(User $user, Component $component)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Component  $component
     * @return mixed
     */
    public function forceDelete(User $user, Component $component)
    {
        //
    }
}
