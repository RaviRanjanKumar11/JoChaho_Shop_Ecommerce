<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite(['resources/css/app.css']) <!-- Tailwind CSS -->
    <style>
        /* Keyframe animation for form entry */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-gradient-to-r from-blue-400 via-indigo-500 to-purple-600 min-h-screen flex items-center justify-center">
    <div class="container mx-auto py-10">
        <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg animate__animated animate__fadeIn" style="animation: fadeIn 0.5s;">
            <h1 class="text-3xl font-bold text-center text-gray-800">Register</h1>
            <form method="POST" action="{{ route('register') }}" class="mt-6">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-300 transition duration-200" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-300 transition duration-200" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-300 transition duration-200" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-300 transition duration-200" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <x-primary-button class="ms-4 bg-blue-600 hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
