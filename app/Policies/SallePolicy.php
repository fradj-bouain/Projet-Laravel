<?php

namespace App\Policies;

use App\User;
use App\Salle;
use Illuminate\Auth\Access\HandlesAuthorization;

class SallePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the salle.
     *
     * @param  \App\User  $user
     * @param  \App\Salle  $salle
     * @return mixed
     */


    public function before($user,$ability)
    {

        if($user ->is_admin){return true;}
    }
    public function view(User $user, Salle $salle)
    {
        return true;
    }

    /**
     * Determine whether the user can create salles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the salle.
     *
     * @param  \App\User  $user
     * @param  \App\Salle  $salle
     * @return mixed
     */
    public function update(User $user, Salle $salle)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the salle.
     *
     * @param  \App\User  $user
     * @param  \App\Salle  $salle
     * @return mixed
     */
    public function delete(User $user, Salle $salle)
    {
         return false;
    }

    /**
     * Determine whether the user can restore the salle.
     *
     * @param  \App\User  $user
     * @param  \App\Salle  $salle
     * @return mixed
     */
    public function restore(User $user, Salle $salle)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the salle.
     *
     * @param  \App\User  $user
     * @param  \App\Salle  $salle
     * @return mixed
     */
    public function forceDelete(User $user, Salle $salle)
    {
        //
    }
}
