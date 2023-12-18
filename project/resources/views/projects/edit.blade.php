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


            <button type="submit" class="btn btn-primary">Update Project</button>
        </form>
    </div>
@endsection
