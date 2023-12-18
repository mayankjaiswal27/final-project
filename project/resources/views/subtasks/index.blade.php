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