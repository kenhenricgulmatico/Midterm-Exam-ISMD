<?php

namespace App\Policies;

use App\Models\User;

class RolePolicy
{

    public function viewAny(User $user): bool
    {
       return $user->hasROle('admin');
    }

     public function view(User $user): bool
    {
        return $user->hasROle('admin');
    }

     public function create(User $user): bool
    {
        return $user->hasROle('admin');
    }

     public function update(User $user): bool
    {
        return $user->hasROle('admin');
    }

     public function delete(User $user): bool
    {
        return $user->hasROle('admin');
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasROle('admin');
    }

    public function restore(User $user): bool
    {
        return false;
    }

     public function forceDelete(User $user): bool
    {
        return false;
    }
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
}
