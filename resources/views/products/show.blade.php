<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
    @vite(['resources/css/app.css']) <!-- Tailwind CSS -->
</head>
<body class="bg-gradient-to-r from-blue-50 to-purple-100 min-h-screen">
    <div class="container mx-auto mt-10">
        <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-6">
                <h1 class="text-3xl font-bold text-center text-gray-800 mb-4">{{ $product->name }}</h1>
                
                <p class="text-gray-700 mb-6 text-lg text-center">{{ $product->description }}</p>

                <div class="text-center mb-6">
                    <p class="text-xl font-semibold text-blue-600">Price: ${{ $product->price }}</p>
                </div>

                @if ($product->image)
                    <div class="flex justify-center mb-6">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="rounded-lg shadow-lg max-h-64">
                    </div>
                @endif

                <div class="text-center">
                    <a href="{{ route('products.index') }}" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-600 transition duration-300">Back to Product List</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
