<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
        input[type="password"] {
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

        .signup-link {
            text-align: center;
            margin-top: 20px;
        }

        .signup-link a {
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
        <h2>Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email:</label>
            <input id="email" class="text-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <div class="input-error">{{ $errors->first('email') }}</div>

            <label for="password">Password:</label>
            <input id="password" class="text-input" type="password" name="password" required autocomplete="current-password" />
            <div class="input-error">{{ $errors->first('password') }}</div>

            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div><br>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                
            </div><br>
            <button class="primary-button ms-3" type="submit">{{ __('Log in') }}</button>
        </form>

        <div class="signup-link">
            <p>Don't have an account?<a href='register'> {{ __('Register') }}</a></p>
        </div>
    </div>

</body>

</html>
