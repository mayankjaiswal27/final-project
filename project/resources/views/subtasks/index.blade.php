<!-- resources/views/subtasks/index.blade.php -->
@extends('layouts.app1')

@section('content')
    <h1>Subtasks for Project: {{ $project->name }}</h1>

    <ul>
        @forelse($subtasks as $subtask)
            <li>{{ $subtask->name }}</li>
        @empty
            <li>No subtasks found for this project.</li>
        @endforelse
    </ul>
@endsection

<!-- resources/views/subtasks/index.blade.php -->
@extends('layouts.app1')

@section('content')
    <h1>Subtasks for Project: {{ $project->name }}</h1>

    <ul>
        @forelse($subtasks as $subtask)
            <li>
                {{ $subtask->name }}

                <!-- Display "edited" message if the subtask has been updated -->
                @unless ($subtask->created_at->eq($subtask->updated_at))
                    <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                @endunless
            </li>
        @empty
            <li>No subtasks found for this project.</li>
        @endforelse
    </ul>
@endsection

<!-- resources/views/subtasks/index.blade.php -->
@extends('layouts.app1')

@section('content')
    <h1>Subtasks for Project: {{ $project->name }}</h1>

    <ul>
        @forelse($subtasks as $subtask)
            <li>
                {{ $subtask->name }}
                
                <!-- Dropdown for editing subtask (if user is the owner) -->
                @if ($subtask->user->is(auth()->user()))
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('subtasks.edit', ['project' => $project, 'subtask' => $subtask])">
                                {{ __('Edit') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                @endif
            </li>
        @empty
            <li>No subtasks found for this project.</li>
        @endforelse
    </ul>
@endsection
