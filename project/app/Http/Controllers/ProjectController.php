<?php

// app/Http/Controllers/ProjectController.php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Retrieve all projects from the database
        $projects = Project::all();

        // Pass the projects data to the 'projects.index' view
        return view('projects.index', compact('projects'));
    }
}
