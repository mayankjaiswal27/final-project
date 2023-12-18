<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Subtask;
use Illuminate\Http\Request;

class SubtaskController extends Controller
{
    public function index(Project $project)
    {
        $subtasks = $project->subtasks;

        return view('subtasks.index', compact('project', 'subtasks'));
    }
}