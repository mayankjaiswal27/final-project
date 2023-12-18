@extends('layouts.app1')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Subtask</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('subtasks.update', ['project' => $project, 'subtask' => $subtask]) }}">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <label for="name">Subtask Name:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $subtask->name) }}" required>
                            </div>  

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Subtask</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
