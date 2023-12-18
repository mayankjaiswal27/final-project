<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #9370db; /* Light Purple color */
            color: #fff;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #8459c5; /* Darker shade on hover */
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: #007bff;
            text-decoration: none;
        }

        .text-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .primary-button {
            width: 100%;
            padding: 10px;
            background-color: #6e58ff; /* Purple color */
            color: #fff;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
            cursor: pointer;
        }

        .primary-button:hover {
            background-color: #5542b8; /* Darker shade on hover */
        }

        .input-error {
            color: #dc3545; /* Red color for error messages */
            margin-top: 5px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Sign Up</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="name">Name:</label>
                <input id="name" class="text-input" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                <div class="input-error">{{ $errors->first('name') }}</div>
            </div>

            <div class="mt-4">
                <label for="email">Email:</label>
                <input id="email" class="text-input" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                <div class="input-error">{{ $errors->first('email') }}</div>
            </div>

            <div class="mt-4">
                <label for="password">Password:</label>
                <input id="password" class="text-input" type="password" name="password" required autocomplete="new-password" />
                <div class="input-error">{{ $errors->first('password') }}</div>
            </div>

            <div class="mt-4">
                <label for="password_confirmation">Confirm Password:</label>
                <input id="password_confirmation" class="text-input" type="password" name="password_confirmation" required autocomplete="new-password" />
                <div class="input-error">{{ $errors->first('password_confirmation') }}</div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <button class="primary-button ms-4" type="submit">{{ __('Register') }}</button>
            </div>
        </form>

        <div class="login-link">
            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </div>

</body>

</html>
