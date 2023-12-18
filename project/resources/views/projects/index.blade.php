
@extends('layouts.app1')

@section('content')
    <h1>Projects</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('projects.create') }}" class="btn btn-primary">Create Project</a>

    <ul>
        @forelse($projects as $project)
            <li>
                <strong>{{ $project->name }}</strong>
                <div>
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                    <a href="{{ route('subtasks.index', $project->id) }}" class="btn btn-sm btn-secondary">View Subtasks</a>
                </div>
            </li>
        @empty
            <li>No projects found.</li>
        @endforelse
    </ul>
@endsection


