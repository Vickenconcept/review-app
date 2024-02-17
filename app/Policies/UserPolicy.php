<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    
    public function create(User $user)
    {
        return $user->is_admin == 1; 
    }
    public function delete(User $user)
    {
        // return $user->name; 
        return $user->is_admin == 1; 
    }
}
