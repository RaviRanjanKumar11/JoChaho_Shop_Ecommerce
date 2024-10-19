<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoChaho</title>
    @vite(['resources/css/app.css']) <!-- Include Tailwind CSS -->
</head>
<body class="bg-gray-100">

  @include('profile.partials.navbar')


    <!-- Main Content -->
    <div class="container mx-auto py-2">
        {{-- <h1 class="text-4xl font-bold text-center">Welcome to Our E-commerce Store</h1> --}}
        

        <section class="bg-gray-100 py-1">
            <div class="container mx-auto">
                <div class="grid grid-cols-5 md:grid-cols-5 lg:grid-cols-10 gap-1">
                    <div class="flex flex-col items-center">
                        <i class="fas fa-tshirt md:fa-2x fa-1x mb-2 text-blue-600"></i>
                        <span>Clothing</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-laptop md:fa-2x fa-1x mb-2 text-blue-600"></i>
                        <span>Electronics</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-home md:fa-2x fa-1x mb-2 text-blue-600"></i>
                        <span>Home & Living</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-utensils md:fa-2x fa-1x mb-2 text-blue-600"></i>
                        <span>Kitchen</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-book md:fa-2x fa-1x mb-2 text-blue-600"></i>
                        <span>Books</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-futbol md:fa-2x fa-1x mb-2 text-blue-600"></i>
                        <span>Sports</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-cogs md:fa-2x fa-1x mb-2 text-blue-600"></i>
                        <span>Automotive</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-gift md:fa-2x fa-1x mb-2 text-blue-600"></i>
                        <span>Gifts</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-baby md:fa-2x fa-1x mb-2 text-blue-600"></i>
                        <span>Baby Products</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-shoe-prints md:fa-2x fa-1x mb-2 text-blue-600"></i>
                        <span>Shoes</span>
                    </div>
                </div>
            </div>
        </section>
        





        <section class="relative bg-white py-3">
            <div class="container mx-auto">
                <h2 class="text-2xl font-bold text-center mb-1">Offers & New Launches</h2>
                <div class="overflow-hidden">
                    <div id="carousel" class="flex transition-transform duration-1000">
                        <div class="flex-shrink-0 w-full">
                            <img src="{{ asset('storage/images/sd1.webp') }}" alt="Offer 1" class="w-full">
                        </div>
                        <div class="flex-shrink-0 w-full">
                            <img src="{{ asset('storage/images/sd2.png') }}" alt="Offer 2" class="w-full">
                        </div>
                        <div class="flex-shrink-0 w-full">
                            <img src="{{ asset('storage/images/sd3.png') }}" alt="Offer 3" class="w-full">
                        </div>
                        <div class="flex-shrink-0 w-full">
                            <img src="{{ asset('storage/images/sd4.webp') }}" alt="Offer 4" class="w-full">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        


        <script>
            let index = 0;
            const carousel = document.getElementById('carousel');
            const totalSlides = carousel.children.length;
        
            setInterval(() => {
                index = (index + 1) % totalSlides;
                const translateX = -index * 100; // Adjust the translate value based on the index
                carousel.style.transform = `translateX(${translateX}%)`;
            }, 2000); // Change slide every second
        </script>
        
<!-- Include Font Awesome CDN in your Blade template's head section -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        




<!-- Update your product listing blade to add an "Add to Cart" button -->
@if($products->isEmpty())
    <p class="text-center mt-2">No products available at this time.</p>
@else
    <div class="mt-1 grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-4">
        @foreach ($products as $product)
            <div class="bg-sky-700 rounded-2xl shadow-sm shadow-sky-500 outline outline-slate-400 -outline-offset-8">
                <div class="group overflow-hidden relative after:duration-500 before:duration-500 duration-500 hover:after:duration-500 hover:after:translate-x-24 hover:before:translate-y-12 hover:before:-translate-x-32 hover:duration-500 after:absolute after:w-24 after:h-24 after:bg-sky-700 after:rounded-full after:blur-xl after:bottom-32 after:right-16 after:w-12 after:h-12 before:absolute before:w-20 before:h-20 before:bg-sky-400 before:rounded-full before:blur-xl before:top-20 before:right-16 before:w-12 before:h-12 hover:rotate-12 flex justify-center items-center h-56 w-80 bg-neutral-900 rounded-2xl outline outline-slate-400 -outline-offset-8">
                    <div class="z-10 flex flex-col items-center gap-2">
                        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" class="w-20 h-20 rounded-full object-cover">
                        <span class="text-slate-400 text-2xl font-bold">{{ $product->name }}</span>
                        <p class="text-gray-50 text-lg">${{ $product->price }}</p>
                        
                        <!-- Add to Cart Button -->
                       <form action="{{ route('cart.add', $product->id) }}" method="POST">
    @csrf
    <button type="submit" class="bg-yellow-500 text-white py-0 px-2 rounded-lg hover:bg-blue-600 transition">Add to Cart</button>
</form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif

    </div>
    
    @include('profile.partials.footer')




        
</body>
</html>
