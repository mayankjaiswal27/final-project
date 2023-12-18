<!-- projects.create.blade.php -->

@extends('layouts.app1')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a New Project with Subtasks</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('projects.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Project Name:</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Project Description:</label>
                                <textarea name="description" id="description" class="form-control" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="due_date">Due Date:</label>
                                <input type="date" name="due_date" id="due_date" class="form-control" required>
                            </div>

                            <!-- Subtask Section -->
                            <hr>
                            <h4>Add Subtasks</h4>
                            <div class="subtasks-container">
                                <div class="subtask">
                                    <label for="subtask_name[]">Subtask Name:</label>
                                    <input type="text" name="subtask_name[]" class="form-control" required>
                                </div>
                            </div>
                            <button type="button" class="btn btn-success" id="addSubtask">Add Another Subtask</button>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Create Project with Subtasks</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to handle adding more subtask fields dynamically
        document.getElementById('addSubtask').addEventListener('click', function () {
            var subtasksContainer = document.querySelector('.subtasks-container');
            var subtaskClone = subtasksContainer.firstElementChild.cloneNode(true);
            subtaskClone.querySelector('input').value = ''; // Clear the input value
            subtasksContainer.appendChild(subtaskClone);
        });
    </script>
@endsection
