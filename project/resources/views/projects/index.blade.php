@extends('layouts.app1')

@section('content')
<style>
    .max-w-2xl {
        margin: 20px auto;
        max-width: 600px;
    }

    .btn {
        margin-bottom: 10px;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #218838;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
    }

    .list-group {
        margin-top: 20px;
    }

    .list-group-item {
        border: 1px solid #ddd;
        border-radius: 8px;
        margin-bottom: 10px;
        padding: 15px; /* Add padding to list items */
    }

    .list-group-item .font-weight-bold {
        display: block;
        margin-bottom: 10px;
    }

    .btn-group {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }

    .dropdown-item {
        cursor: pointer;
    }

    .alert {
        margin-top: 20px;
    }
</style>



    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="my-4"><b>Projects</b></h1><br>

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
                            <a href="{{ route('subtasks.create', $project->id) }}" class="btn btn-primary btn-sm">Add Subtask</a><br><br>
                            
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button class="btn btn-secondary btn-sm">{{ __('More') }}</button>
                                </x-slot>
                                <x-slot name="content">
                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure?')">{{ __('Delete') }}</button>
                                    </form>
                                    <a href="{{ route('subtasks.index', $project->id) }}" class="dropdown-item">{{ __('View Subtasks') }}</a>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                </li>
            @empty
                <li class="list-group-item">No projects found.</li>
            @endforelse
        </ul>
    </div>
@endsection
