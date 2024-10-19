<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-purple-100 to-blue-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Profile Information Section -->
            <div class="p-4 sm:p-8 bg-white shadow-lg sm:rounded-lg transition-transform transform hover:scale-105">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Password Update Section -->
            <div class="p-4 sm:p-8 bg-white shadow-lg sm:rounded-lg transition-transform transform hover:scale-105">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- User Deletion Section -->
            <div class="p-4 sm:p-8 bg-white shadow-lg sm:rounded-lg transition-transform transform hover:scale-105">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
