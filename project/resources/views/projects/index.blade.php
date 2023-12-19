@extends('layouts.app1')

@section('content')
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="my-4">Projects</h1>

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
