<nav class="bg-gray-800 border-b border-gray-700 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-blue-600">
                    NEXUS
                </span>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Home</a>
                <a href="#" class="text-cyan-400">Shop</a>
                <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Categories</a>
                <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Deals</a>
            </div>

            <!-- User Actions -->
            <div class="flex items-center space-x-6">
                <!-- UTC Time -->
                <div class="hidden md:flex items-center space-x-2 text-sm text-gray-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span id="utc-time" class="font-mono">Loading...</span>
                </div>

                <!-- Search -->
                <button class="text-gray-400 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>

                <!-- Wishlist -->
                <button class="text-gray-400 hover:text-white relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                    <span class="absolute -top-1 -right-1 bg-cyan-500 text-xs rounded-full w-4 h-4 flex items-center justify-center">3</span>
                </button>

                <!-- Cart -->
                <button class="text-gray-400 hover:text-white relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                    <span class="absolute -top-1 -right-1 bg-cyan-500 text-xs rounded-full w-4 h-4 flex items-center justify-center">2</span>
                </button>

                <!-- User Menu -->
                <div class="relative">
                    <button class="flex items-center space-x-2 text-sm focus:outline-none">
                        <div class="w-8 h-8 rounded-full bg-gradient-to-r from-cyan-500 to-blue-600 flex items-center justify-center">
                            <span class="font-semibold">3</span>
                        </div>
                        <span class="hidden md:block text-gray-300">3ezzy</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>