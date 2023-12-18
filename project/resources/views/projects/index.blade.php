<!-- resources/views/projects/index.blade.php -->
@extends('layouts.app1')

@section('content')
    <style>
        /* Custom styles */
        .container {
            margin-top: 20px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .card {
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #3498db;
            color: #fff;
            padding: 15px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            margin-top: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f8f8f8;
            transition: border-color 0.3s ease-in-out;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        textarea:focus {
            border-color: #3498db;
            outline: none;
        }

        button {
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #3498db;
            color: #ffffff;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #217dbb;
            color: #ffffff; /* Updated text color on hover */
        }

        .list-group-item {
            background-color: #fff;
            border: 1px solid #e1e1e1;
            border-radius: 4px;
            margin-bottom: 15px;
            padding: 15px;
            transition: box-shadow 0.3s ease-in-out;
        }

        .list-group-item:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .list-group-item .font-weight-bold {
            color: #333;
        }

        .btn-group .btn {
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .card-body {
                padding: 15px;
            }

            input[type="text"],
            input[type="date"],
            textarea {
                padding: 10px;
                margin-bottom: 10px;
            }

            button {
                padding: 10px 15px;
            }
        }
    </style>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="my-4">Projects</h1>
            </div>

            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Create Project</a>

                <ul class="list-group">
                    @forelse($projects as $project)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="font-weight-bold">{{ $project->name }}</span>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('subtasks.create', $project->id) }}" class="btn btn-primary btn-sm">Add Subtask</a><br>
                                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-info btn-sm">Edit</a><br>
                                    <a href="{{ route('subtasks.index', $project->id) }}" class="btn btn-secondary btn-sm">View Subtasks</a>
                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </li>
                    @empty
                        <li class="list-group-item">No projects found.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
