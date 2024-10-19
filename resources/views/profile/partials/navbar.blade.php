<!-- Updated Navbar with Logo, Search, Cart Icon with Count, and Profile Dropdown -->
<nav x-data="{ open: false, profileDropdownOpen: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Left Side: Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('storage/images/lgo.png') }}" alt="Logo" class="w-24 h-20 mr-2">
                    <span class="text-white text-xl font-bold hover:text-blue-400 transition duration-300">
                        <span class="bg-gradient-to-r from-blue-500 to-teal-400 text-transparent bg-clip-text">JoChaho</span>
                    </span>
                </a>
            </div>

            <!-- Center: Search Bar -->
            <div class="flex-grow mx-4 flex items-center">
                <input type="text" placeholder="Search products..." class="w-full p-2 rounded-md bg-gray-300 text-white focus:outline-none focus:ring focus:ring-blue-400">
            </div>

            <!-- Right Side: Cart Icon and User Authentication Links -->
            <div class="flex items-center space-x-4">
                <!-- Cart Icon with Item Count -->
                <a href="{{ route('cart.index') }}" class="relative">
                    <svg class="w-6 h-6 text-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.334 2M7 13h10l3.334-10H6.334L7 13zM7 13h.017m0 0L6.05 19.882a1 1 0 001 .997H17.95a1 1 0 001-.997L16.983 13H7.017zm0 0h10.966M9 21h.01M15 21h.01"></path>
                    </svg>
                    @if(session('cart') && count(session('cart')) > 0)
                        <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full px-1">{{ count(session('cart')) }}</span>
                    @endif
                </a>

                @if(Auth::check())
                    <!-- If user is logged in -->
                    <div class="relative">
                        <button @click="profileDropdownOpen = !profileDropdownOpen" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>

                        <!-- Dropdown Menu, hidden by default, shown on click -->
                        <div x-show="profileDropdownOpen" @click.outside="profileDropdownOpen = false" x-cloak class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-10">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Profile
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- If user is not logged in -->
                    <a href="{{ route('login') }}" class="text-gray-500 hover:text-gray-700">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="ml-4 text-gray-500 hover:text-gray-700">
                        Register
                    </a>
                @endif
            </div>

            <!-- Hamburger Menu for Mobile -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <!-- Responsive Cart and User Links -->
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('cart.index') }}" class="block text-gray-500 hover:bg-gray-100 px-4 py-2">
                Cart
            </a>
        </div>

        <!-- Responsive User Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            @if(Auth::check())
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <a href="{{ route('profile.edit') }}" class="block text-gray-500 hover:bg-gray-100 px-4 py-2">
                        Profile
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left text-gray-500 hover:bg-gray-100 px-4 py-2">
                            Log Out
                        </button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="block text-gray-500 hover:bg-gray-100 px-4 py-2">
                    Login
                </a>
                <a href="{{ route('register') }}" class="block text-gray-500 hover:bg-gray-100 px-4 py-2">
                    Register
                </a>
            @endif
        </div>
    </div>
</nav>
