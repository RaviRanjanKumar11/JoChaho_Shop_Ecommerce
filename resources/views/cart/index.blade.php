<!-- resources/views/cart/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    
    @include('profile.partials.navbar') <!-- Include the navbar -->

    <div class="flex justify-center items-center bg-gray-100">
        <div class="bg-white shadow-lg rounded-lg p-2 w-full max-w-md">
            <h1 class="text-2xl font-extrabold text-gray-800 mb-3 text-center underline">
                <a href="/">Home</a>
            </h1>
            <h1 class="text-2xl font-extrabold text-gray-800 mb-4 text-center">Your Cart</h1>

            @if ($cart && count($cart) > 0)
                <!-- Cart Items -->
                <div class="space-y-6">
                    @foreach ($cart as $id => $details)
                        <div class="bg-white border border-gray-300 rounded-lg shadow-md p-6 flex items-center justify-between hover:bg-gray-50 transition duration-300 ease-in-out transform hover:scale-105">
                            <div class="flex items-center space-x-6">
                                <div class="text-lg font-semibold">{{ $details['name'] }}</div>
                                <div class="text-gray-500">
                                    <form action="{{ route('cart.update', $id) }}" method="POST" class="flex items-center space-x-2">
                                        @csrf
                                        <button name="action" value="decrease" class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-semibold py-1 px-2 rounded">-</button>
                                        <span class="px-2">{{ $details['quantity'] }}</span>
                                        <button name="action" value="increase" class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-semibold py-1 px-2 rounded">+</button>
                                    </form>
                                </div>
                            </div>
                            <div class="text-green-500 font-bold">₹{{ $details['price'] }}</div>
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
                                    Remove
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>

                <!-- Total Price Card -->
                <div class="mt-8 bg-gradient-to-r from-indigo-500 to-sky-500 text-white font-bold text-xl p-2 rounded-lg shadow-lg text-center">
                    Total Price: ₹{{ number_format(array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, $cart)), 2) }}
                </div>

            @else
                <!-- Empty Cart Message -->
                <div class="bg-gray-100 p-10 rounded-lg shadow-lg text-center">
                    <p class="text-xl font-semibold text-blue-700">Your cart is empty.</p>
                    <a href="{{ route('home') }}" class="mt-4 inline-block bg-sky-500 text-black underline py-2 px-6 rounded-lg hover:bg-sky-600 transition duration-300 ease-in-out">
                        Continue Shopping
                    </a>
                </div>
            @endif
        </div>
    </div>

    @include('profile.partials.footer') <!-- Include the footer -->
    
</body>
</html>
