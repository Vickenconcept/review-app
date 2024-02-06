<?php

namespace App\Policies;

use App\Models\User;

class SettingPolicy
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
        return $user->is_admin == 1; // Allow user creation only if is_admin is 1
    }
}
