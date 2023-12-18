<!-- resources/views/projects/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Projects</h1>

    <ul>
        @foreach($projects as $project)
            <li>
                <a href="{{ route('subtasks.index', $project->id) }}">{{ $project->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
