<?php

namespace App\Policies;

use App\User;
use App\Info;
use Illuminate\Auth\Access\HandlesAuthorization;

class InfoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the info.
     *
     * @param  \App\User  $user
     * @param  \App\Info  $info
     * @return mixed
     */
    public function view(User $user, Info $info)
    {
        return true;
    }
    

    /**
     * Determine whether the user can create infos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    
    }

    /**
     * Determine whether the user can update the info.
     *
     * @param  \App\User  $user
     * @param  \App\Info  $info
     * @return mixed
     */
    public function update(User $user, Info $info)
    {
        return true;
    }
    

    /**
     * Determine whether the user can delete the info.
     *
     * @param  \App\User  $user
     * @param  \App\Info  $info
     * @return mixed
     */
    public function delete(User $user, Info $info)
    {
        return true;
    
    }

    /**
     * Determine whether the user can restore the info.
     *
     * @param  \App\User  $user
     * @param  \App\Info  $info
     * @return mixed
     */
    public function restore(User $user, Info $info)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the info.
     *
     * @param  \App\User  $user
     * @param  \App\Info  $info
     * @return mixed
     */
    public function forceDelete(User $user, Info $info)
    {
        //
    }
}
