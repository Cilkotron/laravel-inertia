<?php

namespace App\Policies;

use App\Models\User;


class UserPolicy
{
  
    public function create(User $user): bool
    {
        return $user->email === 'sanjabudic@gmail.com';
    }

}
