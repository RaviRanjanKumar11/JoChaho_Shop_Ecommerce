<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
<body class="bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 min-h-screen flex items-center justify-center">
    <div class="container mx-auto py-5">
        <div class="max-w-md mx-auto bg-white p-12 rounded-lg shadow-md animate__animated animate__fadeIn" style="animation: fadeIn 0.5s;">
            <div class="flex justify-center">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{asset('storage/images/lgo.png')}}" alt="Logo" class="w-24    h-20 mr-2"> <!-- Add your logo icon path -->
                <span class="text-white text-xl font-bold hover:text-blue-400 transition duration-300">
                    {{-- <span class="bg-gradient-to-r from-blue-500 to-teal-400 text-transparent bg-clip-text">JoChaho</span> --}}
                </span>
            </a>
            </div>
            <h1 class="text-2xl font-bold text-center text-gray-800">Login</h1>
            <form method="POST" action="{{ route('login') }}" class="mt-2">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" class="block w-full mt-1 border border-blue-600  rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-300 transition duration-200" name="email" required autofocus>
                </div>
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" class="block border border-blue-600 w-full mt-1 rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-300 transition duration-200" name="password" required>
                </div>
                <div class="mt-6">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">Login</button>
                </div>
            </form>
            <p class="mt-4 text-center text-sm text-gray-600">
                Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register</a>
            </p>
        </div>
    </div>
</body>
</html>
