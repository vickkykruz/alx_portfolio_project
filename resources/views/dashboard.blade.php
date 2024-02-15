<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-600">Personal Details</h2>
            <p class="text-gray-500 mb-6">Please fill out all the fields.</p>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- Rending the Components/Welcome file --}}
                <x-welcome :userData="$user" :status="$register_status" :userInfo="$user_info" />
            </div>
        </div>
    </div>
</x-app-layout>
