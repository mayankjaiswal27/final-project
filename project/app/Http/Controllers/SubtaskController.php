<?php

namespace App\Http\Controllers;

use App\Models\Subtask;
use App\Models\Project;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class SubtaskController extends Controller
{
    public function index(Project $project)
    {
        $subtasks = $project->subtasks;

        return view('subtasks.index', compact('project', 'subtasks'));
    }

    public function create(Project $project)
    {
        return view('subtasks.create', compact('project'));
    }

    public function store(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $project->subtasks()->create($request->all());

        return redirect()->route('subtasks.index', ['project' => $project])->with('success', 'Subtask created successfully!');
    }

    public function edit(Project $project, Subtask $subtask)
    {

        return view('subtasks.edit', compact('project', 'subtask'));
    }

    public function update(Request $request, Project $project, Subtask $subtask)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ]);
    
        $subtask->update($validated);


        return redirect()->route('subtasks.index', ['project' => $project])->with('success', 'Subtask updated successfully!');
    }

    public function destroy(Project $project, Subtask $subtask)
    {
        
        $subtask->delete();

        return redirect()->route('subtasks.index', ['project' => $project])->with('success', 'Subtask deleted successfully!');
    }
}
