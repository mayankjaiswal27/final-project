<!-- resources/views/projects/index.blade.php -->
@extends('layouts.app1')

@section('content')
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="my-4">Projects</h1>

<<<<<<< HEAD
    <ul>
        @forelse($projects as $project)
            <li>
                {{ $project->name }}
                
                <!-- Display "edited" message if the project has been updated -->
                @unless ($project->created_at->eq($project->updated_at))
                    <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                @endunless

                <!-- Dropdown for editing project (if user is the owner) -->
                @if ($project->user->is(auth()->user()))
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('projects.edit', $project)">
                                {{ __('Edit') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                @endif
            </li>
        @empty
            <li>No projects found.</li>
        @endforelse
    </ul>
=======
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
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            <a href="{{ route('subtasks.index', $project->id) }}" class="btn btn-secondary btn-sm">View Subtasks</a>
                        </div>
                    </div>
                </li>
            @empty
                <li class="list-group-item">No projects found.</li>
            @endforelse
        </ul>
    </div>
>>>>>>> 17c967702b80260e353654d25abf34d57450e4c3
@endsection
