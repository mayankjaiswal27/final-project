<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Subtask;

class SubtaskPolicy
{
    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Subtask $subtask): bool
    {
        // Check if the user is the owner of the subtask
        return $subtask->user->is($user);
    }
}
