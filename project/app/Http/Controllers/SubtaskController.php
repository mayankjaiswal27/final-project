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
        // Assuming there's a relationship between Project and Subtask
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

        // Assuming there's a relationship between Project and Subtask
        $project->subtasks()->create($request->all());

        return redirect()->route('subtasks.index', ['project' => $project])->with('success', 'Subtask created successfully!');
    }

    public function edit(Project $project, Subtask $subtask)
    {
        try {
            $this->authorize('update', $subtask);
        } catch (AuthorizationException $e) {
            // Handle the authorization exception, e.g., redirect to an error page
            abort(403, 'Unauthorized action.');
        }

        return view('subtasks.edit', compact('project', 'subtask'));
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

        // Redirect to the Subtasks index
        return redirect()->route('subtasks.index', ['project' => $project])->with('success', 'Subtask updated successfully!');
    }

    public function destroy(Project $project, Subtask $subtask)
    {
        // Authorization check
        $this->authorize('delete', $subtask);

        $subtask->delete();

        return redirect()->route('subtasks.index', ['project' => $project])->with('success', 'Subtask deleted successfully!');
    }
}
