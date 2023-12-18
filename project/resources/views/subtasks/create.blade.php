<!-- subtasks.create.blade.php -->

@extends('layouts.app1')

@section('content')
    <style>
        /* Add your custom CSS styles here */

        .container {
            /* Add container styles */
            margin-top: 20px;
            max-width: 600px; /* Set a maximum width for better readability on larger screens */
            margin-left: auto;
            margin-right: auto;
        }

        .card {
            /* Add card styles */
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            /* Add card header styles */
            background-color: #007bff;
            color: #fff;
            padding: 10px;
        }

        .card-body {
            /* Add card body styles */
            padding: 20px;
        }

        .form-group {
            /* Add form group styles */
            margin-bottom: 20px;
        }

        label {
            /* Add label styles */
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        textarea {
            /* Add input styles */
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            /* Add button styles */
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        button:hover {
            /* Add button hover styles */
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .card-body {
                padding: 15px;
            }

            input[type="text"],
            textarea {
                padding: 8px;
            }

            button {
                padding: 8px 15px;
            }
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a New Subtask</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('subtasks.store', ['project' => $project->id]) }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Subtask Name:</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Subtask Description:</label>
                                <textarea name="description" id="description" class="form-control" required></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit">Create Subtask</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
