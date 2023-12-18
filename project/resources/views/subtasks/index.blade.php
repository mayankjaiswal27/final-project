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
