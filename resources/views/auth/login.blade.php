<x-guest-layout title="Login - NEXUS">
  
    
   
    
    <div class="w-full max-w-md bg-gray-900 border border-gray-800 rounded-2xl p-8 shadow-xl">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-blue-600">
                Welcome Back
            </h1>
            <p class="text-gray-400 mt-2">Sign in to continue to NEXUS</p>
        </div>
        
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-300 mb-2">Username or Email</label>
                <input type="text" name="email" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-cyan-500 text-white placeholder-gray-500" placeholder="Enter your username">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                <input type="password" name="password" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-cyan-500 text-white placeholder-gray-500" placeholder="••••••••">
            </div>
            
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" class="h-4 w-4 rounded border-gray-700 bg-gray-800 text-cyan-500 focus:ring-cyan-500">
                    <label class="ml-2 text-sm text-gray-400">Remember me</label>
                </div>
                <a href="{{ route('password.request') }}" class="text-sm text-cyan-400 hover:text-cyan-300">Forgot password?</a>
            </div>
            
            <button type="submit" class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-lg px-4 py-3 font-medium hover:shadow-lg hover:shadow-cyan-500/25 transition-all duration-200">
                Sign In
            </button>
        </form>
        
        <div class="mt-6 text-center text-sm text-gray-400">
            Don't have an account? 
            <a href="{{ route('register') }}" class="text-cyan-400 hover:text-cyan-300">Create one</a>
        </div>
    </div>
</x-guest-layout>