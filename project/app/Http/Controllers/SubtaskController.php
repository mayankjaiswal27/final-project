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
        return view('subtasks.index', compact('subtasks', 'project'));
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

        return redirect()->route('subtasks.index', $project->id)->with('success', 'Subtask created successfully!');
    }

    public function edit(Project $project, Subtask $subtask)
{
    $this->authorize('update', $subtask);

    return view('subtasks.edit', [
        'project' => $project,
        'subtask' => $subtask,
    ]);
}


public function update(Request $request, Project $project, Subtask $subtask)
{
    // Authorization check
    $this->authorize('update', $subtask);

    // Validation
    $validated = $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // Update the Subtask
    $subtask->update($validated);

    // Redirect to the Subtasks index for the specific Project
    return redirect()->route('subtasks.index', $project->id)->with('success', 'Subtask updated successfully!');
}


    public function destroy(Project $project, Subtask $subtask)
    {
        $subtask->delete();

        return redirect()->route('subtasks.index', $project->id)->with('success', 'Subtask deleted successfully!');
    }
}
