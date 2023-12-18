<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Auth\Access\AuthorizationException;

use Illuminate\Http\Request;

class ProjectController extends Controller
{public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Project::create($request->all());

        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }

    public function edit(Project $project)
    {
        try {
            $this->authorize('update', $project);
        } catch (AuthorizationException $e) {
            // Handle the authorization exception, e.g., redirect to an error page
            abort(403, 'Unauthorized action.');
        }
    
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        // Authorization check
        $this->authorize('update', $project);

        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Update the Project
        $project->update($validated);

        // Redirect to the Projects index
        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully!');
    }
}
