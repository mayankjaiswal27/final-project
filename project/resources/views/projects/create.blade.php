<!-- projects.create.blade.php -->

@extends('layouts.app1')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a New Project</div>

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

                            <div class="form-group">
                                <a href="{{ route('subtasks.create', ['project' => 'placeholder']) }}" class="btn btn-primary" id="addSubtask">Add Subtask</a>
                                <button type="submit" class="btn btn-primary">Create Project</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to handle updating the 'Add Subtask' link after project creation
        document.getElementById('addSubtask').addEventListener('click', function () {
            // Retrieve the project ID after creating the project (use an AJAX request or another method)
            // For now, you can use a placeholder value
            var projectId = 123; // Replace with the actual project ID

            // Update the 'Add Subtask' link with the dynamic project ID
            this.href = this.href.replace('placeholder', Id);
        });
    </script>
@endsection
