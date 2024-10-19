<!-- resources/views/products/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    @vite(['resources/css/app.css']) <!-- Tailwind CSS -->
</head>

<body class="bg-gradient-to-br from-gray-300 to-gray-100 relative">
    <!-- Wave Background -->
    <svg class="absolute top-0 left-0 w-full h-half-mb-28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgba(255, 255, 255, 0.8)" fill-opacity="1" d="M0,96L30,128C60,160,120,224,180,224C240,224,300,160,360,133.3C420,107,480,117,540,133.3C600,149,660,171,720,192C780,213,840,235,900,229.3C960,224,1020,192,1080,170.7C1140,149,1200,139,1260,160C1320,181,1380,235,1410,213.3L1440,192L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
    </svg>

    <div class="container mx-auto mt-4 relative z-10">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Add Product</h1>
        <div class="bg-white rounded-lg shadow-lg p-6 md:p-8 max-w-lg mx-auto backdrop-blur-sm bg-opacity-90 transition-all duration-500 hover:shadow-2xl">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-gray-700">Product Name</label>
                    <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-transform transform hover:scale-105 bg-gray-50 hover:bg-gray-100" required>
                </div>
                <div>
                    <label for="description" class="block text-gray-700">Description</label>
                    <textarea name="description" id="description" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-transform transform hover:scale-105 bg-gray-50 hover:bg-gray-100" required></textarea>
                </div>
                <div>
                    <label for="price" class="block text-gray-700">Price</label>
                    <input type="number" name="price" id="price" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-transform transform hover:scale-105 bg-gray-50 hover:bg-gray-100" required>
                </div>
                <div>
                    <label for="image" class="block text-gray-700">Image</label>
                    <input type="file" name="image" id="image" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-transform transform hover:scale-105 bg-gray-50 hover:bg-gray-100">
                </div>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition-transform transform hover:scale-105">Add Product</button>
            </form>
            <a href="{{ route('products.index') }}" class="text-blue-600 hover:underline block text-center mt-4">Back to Product List</a>
        </div>
    </div>
</body>
</html>
