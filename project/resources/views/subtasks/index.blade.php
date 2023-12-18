<!-- subtasks.index.blade.php -->

@extends('layouts.app1')

@section('content')
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
                                <li>{{ $subtask->name }}</li>
                                <a href="{{ route('subtasks.edit', ['project' => $project->id, 'subtask' => $subtask->id]) }}" class="btn btn-primary btn-sm">Edit</a>

                            <form action="{{ route('subtasks.destroy', ['project' => $project->id, 'subtask' => $subtask->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
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
