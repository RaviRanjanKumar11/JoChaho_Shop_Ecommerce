<!-- resources/views/dashboard.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-blue-400 via-indigo-500 to-purple-600 rounded-lg shadow-lg p-6">
                <h1 class="text-white text-3xl font-bold mb-4 text-center">Welcome Back!</h1>
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-6">
                    <div class="text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
