<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    @vite(['resources/css/app.css']) <!-- Tailwind CSS -->
</head>
<body class="bg-gradient-to-r from-blue-50 to-purple-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Edit Product</h1>
        <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium">Product Name</label>
                    <input type="text" name="name" id="name" value="{{ $product->name }}" class="border border-gray-300 rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium">Description</label>
                    <textarea name="description" id="description" class="border border-gray-300 rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-400" required>{{ $product->description }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-medium">Price</label>
                    <input type="number" name="price" id="price" value="{{ $product->price }}" class="border border-gray-300 rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-medium">Image</label>
                    <input type="file" name="image" id="image" class="border border-gray-300 rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="mt-2 rounded shadow-sm w-32">
                    @endif
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Update Product</button>
            </form>
            <div class="mt-4">
                <a href="{{ route('products.index') }}" class="text-blue-600 hover:underline">Back to Product List</a>
            </div>
        </div>
    </div>
</body>
</html>
