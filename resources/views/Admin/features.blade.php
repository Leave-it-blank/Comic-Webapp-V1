@extends('layouts.admin')

@section('content')


    <div class="shadow p-3 border-2 ">
        <div class="font-bold hover:text-yellow-500 "> {{ 'Carousel Settings' }} </div>
        <div class="pt-4 pl-3">
            <a href="{{ route('admin.carousel.index') }}" class="btn btn-primary">Carousel </a>

        </div>
        <div class="flex justify-between items-center pt-4  pl-3" @click="toggleActive = !toggleActive">
            <h2>Carousel Status:</h2>
            <span class="text-sm">Enable the carousel on the homepage to display the items added in the Carousel section.
            </span>
            <div class="w-16 h-10 flex items-center bg-gray-300 rounded-full p-1 duration-300 ease-in-out"
                :class="{ 'bg-green-400': toggleActive}">
                <div class="bg-white w-8 h-8 rounded-full shadow-md transform duration-300 ease-in-out"
                    :class="{ 'translate-x-6': toggleActive,}"></div>
            </div>
        </div>
    </div>
    <!-- Container -->
    <div class="shadow p-3 border-2 ">
        <div class="flex justify-between items-center" @click="toggleActive = !toggleActive">
            <h2>Toggle me</h2>
            <div class="w-16 h-10 flex items-center bg-gray-300 rounded-full p-1 duration-300 ease-in-out"
                :class="{ 'bg-green-400': toggleActive}">
                <div class="bg-white w-8 h-8 rounded-full shadow-md transform duration-300 ease-in-out"
                    :class="{ 'translate-x-6': toggleActive,}"></div>
            </div>
        </div>
    </div>
    <!-- Container -->
    <div class="shadow p-3 border-2 ">
        <div class="flex justify-between items-center" @click="toggleActive = !toggleActive">
            <h2>Search</h2>
            <div class="w-16 h-10 flex items-center bg-gray-300 rounded-full p-1 duration-300 ease-in-out"
                :class="{ 'bg-green-400': toggleActive}">
                <div class="bg-white w-8 h-8 rounded-full shadow-md transform duration-300 ease-in-out"
                    :class="{ 'translate-x-6': toggleActive,}"></div>
            </div>
        </div>
    </div>
    <!-- Container -->
    <div class="shadow p-3 border-2 ">
        <div class="flex justify-between items-center" @click="toggleActive = !toggleActive">
            <h2>Sidebar</h2>
            <div class="w-16 h-10 flex items-center bg-gray-300 rounded-full p-1 duration-300 ease-in-out"
                :class="{ 'bg-green-400': toggleActive}">
                <div class="bg-white w-8 h-8 rounded-full shadow-md transform duration-300 ease-in-out"
                    :class="{ 'translate-x-6': toggleActive,}"></div>
            </div>
        </div>
    </div>

@endsection
