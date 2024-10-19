<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    @vite(['resources/css/app.css']) <!-- Tailwind CSS -->
</head>
<body class="bg-gradient-to-br from-gray-200 to-gray-400 relative">
    <!-- Wave Background -->
    <svg class="absolute top-0 left-0 w-full h-32 -mb-28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgba(255, 255, 255, 0.7)" fill-opacity="1" d="M0,64L30,85.3C60,107,120,149,180,165.3C240,181,300,171,360,160C420,149,480,137,540,117.3C600,96,660,64,720,58.7C780,53,840,75,900,85.3C960,96,1020,96,1080,106.7C1140,117,1200,139,1260,138.7C1320,139,1380,117,1410,106.7L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
    </svg>

    <div class="container mx-auto mt-16 relative z-10">
        <h1 class="text-4xl font-bold text-center mb-4 text-gray-800">Product List</h1>
       
        
        <div class="flex justify-center">
            <div class="">
           
                <a href="{{ route('products.create') }}" class="bg-red-600 hover:bg-blue-700 text-white px-3 py-1 border border-black rounded shadow transition duration-300 ease-in-out">Add Product</a>
            </div>
        <div class="overflow-x-auto mt-2 justify-center">
            <table class="w-full bg-white shadow-lg rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gradient-to-r from-blue-500 to-purple-500 text-white">
                        <th class="py-3 px-4">ID</th>
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Price</th>
                        <th class="py-3 px-4">discription</th>
                        <th class="py-3 px-4">Add Date</th>
                        <th class="py-3 px-4">Actions</th>
                        
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($products as $product)
                        <tr class="hover:bg-gray-100 transition duration-200">
                            <td class="border px-4 py-2">{{ $product->id }}</td>
                            <td class="border px-4 py-2">{{ $product->name }}</td>
                            <td class="border px-4 py-2">${{ $product->price }}</td>
                            <td class="border px-4 py-2">{{ $product->description }}</td>
                            <td class="border px-4 py-2">{{ $product->created_at }}</td>
                            <td class="border px-4 py-2 flex space-x-2">
                                <a href="{{ route('products.show', $product->id) }}" class="text-blue-600 hover:text-blue-800 transition duration-200">View</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-600 hover:text-yellow-800 transition duration-200">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 transition duration-200">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
        </div>
    </div>
</body>
</html>
