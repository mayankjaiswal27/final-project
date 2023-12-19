<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Redirect;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        

        return view('projects.index', compact('projects'));
    }
    public function getCountOfProjects()
    {
        $projectsCount = Project::count(); // Get the count of projects
        return $projectsCount;
    }
    public function getCountOfTasksToBeCompleted()
    {
        $tasksToBeCompletedCount = Project::where('completed', false)->count(); // Count tasks with completed attribute set to false
        return $tasksToBeCompletedCount;
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
    ]);

    $project = Project::create($request->all());

    return redirect()->route('projects.index')->with('success', 'Project created successfully!');
}


public function edit(Project $project)
{

    return view('projects.edit', compact('project'));
}

public function update(Request $request, Project $project)
{

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'due_date' => 'required|date',
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
