<!-- subtasks.index.blade.php -->

@extends('layouts.app1')

@section('content')
    <style>
        /* Add your custom CSS styles here */

        .container {
            /* Add container styles */
            margin-top: 20px;
            max-width: 600px; /* Set a maximum width for better readability on larger screens */
            margin-left: auto;
            margin-right: auto;
        }

        .card {
            /* Add card styles */
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            /* Add card header styles */
            background-color: #007bff;
            color: #fff;
            padding: 10px;
        }

        .card-body {
            /* Add card body styles */
            padding: 20px;
        }

        .btn {
            /* Add button styles */
            margin-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        .btn-group .btn {
            margin-right: 10px;
        }

        .btn-primary,
        .btn-danger,
        .btn-info {
            padding: 8px 15px;
            border-radius: 4px;
            border: 1px solid transparent; /* Add transparent border for all buttons */
            transition: border-color 0.3s ease-in-out; /* Add transition effect for border color */
        }

        .btn-danger {
            border: 1px solid #dc3545; /* Add border color for danger button */
        }

        .btn-info {
            border: 1px solid #17a2b8; /* Add border color for info button */
        }

        .btn-primary:hover,
        .btn-danger:hover,
        .btn-info:hover {
            border-color: #007bff; /* Change border color on hover for all buttons */
        }

        @media (max-width: 768px) {
            .card-body {
                padding: 15px;
            }

            .btn-primary,
            .btn-danger,
            .btn-info {
                padding: 6px 12px;
            }
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Subtasks for Project: {{ $project->name }}</div>

                    <div class="card-body">
                        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back to Projects</a>

                        <h3>Subtasks:</h3>
                        <ul>
                            @forelse($subtasks as $subtask)
                                <li>{{ $subtask->name }}
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('subtasks.edit', ['project' => $project->id, 'subtask' => $subtask->id]) }}" class="btn btn-primary btn-sm">Edit</a>

                                        <form action="{{ route('subtasks.destroy', ['project' => $project->id, 'subtask' => $subtask->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @empty
                                <li>No subtasks available.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
