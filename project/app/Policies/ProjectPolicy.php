<?php

namespace App\Policies;
use App\Models\Project;
use App\Models\User;

class ProjectPolicy
{
    /**
     * Determine whether the user can update the project.
     */
    public function update(User $user, Project $project): bool
    {
        return $project->user_id === $user->id;
    }
}
