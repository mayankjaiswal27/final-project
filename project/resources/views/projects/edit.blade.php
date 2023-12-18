<!-- resources/views/projects/edit.blade.php -->

@extends('layouts.app1')

@section('content')
    <div class="container">
        <h1>Edit Project</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('projects.update', $project) }}">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="name">Project Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $project->name) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Project Description:</label>
                <textarea name="description" id="description" class="form-control" required>{{ old('description', $project->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="due_date">Due Date:</label>
                <input type="date" name="due_date" id="due_date" class="form-control" value="{{ old('due_date', $project->due_date) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Project</button>
        </form>
    </div>
@endsection
