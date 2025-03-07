@extends('layouts.app')

@section('title', 'Shop')

@section('content')
    <!-- Filters and Sort -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0 mb-8">
        <div class="flex space-x-4">
            <button class="px-4 py-2 bg-cyan-500 text-white rounded-lg">All</button>
            <button class="px-4 py-2 bg-gray-800 text-gray-300 rounded-lg hover:bg-gray-700">Electronics</button>
            <button class="px-4 py-2 bg-gray-800 text-gray-300 rounded-lg hover:bg-gray-700">Fashion</button>
            <button class="px-4 py-2 bg-gray-800 text-gray-300 rounded-lg hover:bg-gray-700">Home</button>
        </div>

        <select class="bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-gray-300 focus:outline-none focus:border-cyan-500">
            <option>Popular</option>
            <option>Newest</option>
            <option>Price: Low to High</option>
            <option>Price: High to Low</option>
        </select>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($products as $product)
            <div class="bg-gray-800 rounded-xl overflow-hidden">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                    <span class="text-xl font-bold">${{ $product->price }}</span>
                </div>
            </div>
        @endforeach
    </div>
@endsection