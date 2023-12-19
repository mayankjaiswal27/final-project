{{-- <!-- resources/views/subtasks/index.blade.php -->
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
 --}}

 @extends('layouts.app1')

@section('content')
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="my-4">Subtasks</h1>

        <a href="{{ route('subtasks.create', $project) }}" class="btn btn-primary mb-3">Create Subtask</a>

        <ul class="list-group">
            @forelse($subtasks as $subtask)
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="font-weight-bold">{{ $subtask->name }}</span>
                        <div class="btn-group" role="group">
                            <a href="{{ route('subtasks.edit', ['project' => $project, 'subtask' => $subtask->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('subtasks.destroy', ['project' => $project, 'subtask' => $subtask->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </li>
            @empty
                <li class="list-group-item">No subtasks found.</li>
            @endforelse
        </ul>
    </div>
@endsection
