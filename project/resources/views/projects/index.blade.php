<!-- resources/views/projects/index.blade.php -->
@extends('layouts.app1')

@section('content')
    <h1>Projects</h1>

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
@endsection
