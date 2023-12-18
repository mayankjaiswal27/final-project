<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Subtask;

class SubtaskPolicy
{
    
    public function update(User $user, Subtask $subtask, Project $project): bool
    {
        return $project->user_id === $user->id;
    }
}
