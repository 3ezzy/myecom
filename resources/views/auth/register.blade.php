<x-guest-layout>
    <div class="animate-gradient absolute inset-0 opacity-20"></div>
    <div class="relative min-h-screen flex flex-col items-center justify-center p-4">
        <div class="w-full max-w-md bg-gray-900 border border-gray-800 rounded-2xl p-8 shadow-xl">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-blue-600">
                    Create Account
                </h1>
                <p class="text-gray-400 mt-2">Join the future of commerce</p>
            </div>
    
            <form action="{{ route('register') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Name</label>
                    <input id="name" type="text" name="name" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-cyan-500 text-white placeholder-gray-500" placeholder="Choose a Name" required>
                </div>
               
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                    <input id="email" type="email" name="email" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-cyan-500 text-white placeholder-gray-500" placeholder="john@example.com" required>
                </div>
    
    
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                    <input id="password" type="password" name="password" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-cyan-500 text-white placeholder-gray-500" required>
                </div>
    
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-2">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-cyan-500 text-white placeholder-gray-500" required>
                </div>
    
                <div class="flex items-start">
                    <input id="terms" type="checkbox" class="mt-1 h-4 w-4 rounded border-gray-700 bg-gray-800 text-cyan-500 focus:ring-cyan-500" required>
                    <label for="terms" class="ml-2 text-sm text-gray-400">
                        I agree to the <a href="#" class="text-cyan-400 hover:text-cyan-300">Terms of Service</a> and <a href="#" class="text-cyan-400 hover:text-cyan-300">Privacy Policy</a>
                    </label>
                </div>
    
                <button type="submit" class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-lg px-4 py-3 font-medium hover:shadow-lg hover:shadow-cyan-500/25 transition-all duration-200">
                    Create Account
                </button>
            </form>
    
            <div class="mt-6 text-center text-sm text-gray-400">
                Already have an account? <a href="{{ route('login') }}" class="text-cyan-400 hover:text-cyan-300">Sign in</a>
            </div>
        </div>
    </div>
</x-guest-layout>
