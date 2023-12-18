<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        
        $project = new Project();
    
        return view('projects.create', compact('project'));
    }
    // ProjectController.php

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        // Add other validation rules as needed
    ]);

    // Create the project
    $project = Project::create($request->all());

    // Redirect to the Projects index or update the URL dynamically
    return redirect()->route('projects.index')->with('success', 'Project created successfully!');
}


public function edit(Project $project)
{
    try {
        // $this->authorize('update', $project);
    } catch (AuthorizationException $e) {
        abort(403, 'Unauthorized action.');
    }

    return view('projects.edit', compact('project'));
}

public function update(Request $request, Project $project)
{
    // $this->authorize('update', $project);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'due_date' => 'required|date',
        // Add other validation rules as needed
    ]);

    $project->update($validated);

    return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
}

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully!');
    }
}
