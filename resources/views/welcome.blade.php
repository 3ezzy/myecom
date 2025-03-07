<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXUS - Where Future Commerce Lives</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'gradient': 'gradient 15s ease infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        gradient: {
                            '0%': { 'background-position': '0% 50%' },
                            '50%': { 'background-position': '100% 50%' },
                            '100%': { 'background-position': '0% 50%' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    },
                    backgroundSize: {
                        'gradient-size': '400% 400%'
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
        }
        .animate-gradient {
            background: linear-gradient(-45deg, #00C9FF, #92FE9D, #2196F3, #673AB7);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
    <!-- Navigation -->
    <nav class="bg-gray-900/95 backdrop-blur-md fixed w-full z-50 border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <span class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-blue-600">NEXUS</span>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-6">
                        <a href="#" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium transition-colors duration-200">Explore</a>
                        <a href="#" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium transition-colors duration-200">Marketplace</a>
                        <a href="#" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium transition-colors duration-200">Innovation</a>
                        <a href="{{ route('login') }}" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium transition-colors duration-200">Sign in</a>
                        <a href="{{ route('register') }}" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium transition-colors duration-200">Sign up</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative min-h-screen animate-gradient">
        <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6">
                        The Future of
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-blue-600">Commerce</span>
                        <br>Is Here
                    </h1>
                    <p class="text-gray-300 text-xl mb-8 leading-relaxed">
                        Where innovation meets seamless transactions. Experience a new dimension of digital commerce on NEXUS.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <button class="group relative overflow-hidden bg-gradient-to-r from-cyan-500 to-blue-600 px-8 py-4 rounded-full text-lg font-semibold transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/50 transform hover:-translate-y-1">
                            Launch Experience
                            <div class="absolute inset-0 h-full w-full bg-white/[0.03] group-hover:scale-105 transition-transform duration-500"></div>
                        </button>
                        <button class="group relative overflow-hidden bg-gray-800 px-8 py-4 rounded-full text-lg font-semibold transition-all duration-300 hover:bg-gray-700 border border-gray-700 transform hover:-translate-y-1">
                            Discover More
                            <div class="absolute inset-0 h-full w-full bg-white/[0.03] group-hover:scale-105 transition-transform duration-500"></div>
                        </button>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <img src="https://images.unsplash.com/photo-1633355444132-695d5876cd00?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" 
                         alt="Future Commerce Illustration" 
                         class="animate-float rounded-2xl shadow-2xl shadow-cyan-500/20">
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-24 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-blue-600 mb-4">Redefining Digital Commerce</h2>
                <p class="text-gray-400 text-lg">Experience commerce at the speed of tomorrow</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature Cards -->
                <div class="group bg-gray-800/50 backdrop-blur-md p-8 rounded-2xl border border-gray-700 transition-all duration-300 hover:-translate-y-2">
                    <div class="bg-gradient-to-br from-cyan-500 to-blue-600 w-14 h-14 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Quantum Speed</h3>
                    <p class="text-gray-400">Lightning-fast transactions powered by next-gen technology.</p>
                </div>

                <div class="group bg-gray-800/50 backdrop-blur-md p-8 rounded-2xl border border-gray-700 transition-all duration-300 hover:-translate-y-2">
                    <div class="bg-gradient-to-br from-cyan-500 to-blue-600 w-14 h-14 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Neural Security</h3>
                    <p class="text-gray-400">Advanced AI-powered security protecting every transaction.</p>
                </div>

                <div class="group bg-gray-800/50 backdrop-blur-md p-8 rounded-2xl border border-gray-700 transition-all duration-300 hover:-translate-y-2">
                    <div class="bg-gradient-to-br from-cyan-500 to-blue-600 w-14 h-14 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Smart Integration</h3>
                    <p class="text-gray-400">Seamless connection with next-generation digital ecosystems.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="relative py-16">
        <div class="absolute inset-0 animate-gradient opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-8">Ready to Step into the Future?</h2>
            <button class="group relative overflow-hidden bg-gradient-to-r from-cyan-500 to-blue-600 px-8 py-4 rounded-full text-lg font-semibold transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/50 transform hover:-translate-y-1">
                Join NEXUS
                <div class="absolute inset-0 h-full w-full bg-white/[0.03] group-hover:scale-105 transition-transform duration-500"></div>
            </button>
        </div>
    </div>
    
        <!-- Footer -->
    <footer class="bg-gray-900 border-t border-gray-800">
        <div class="max-w-7xl mx-auto pt-12 pb-8 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- Brand Column -->
                <div class="space-y-4">
                    <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-blue-600">NEXUS</span>
                    <p class="text-gray-400 text-sm mt-2">Redefining the future of digital commerce through innovation and seamless experiences.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors duration-200">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors duration-200">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors duration-200">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase mb-4">Platform</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors duration-200">Features</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors duration-200">Marketplace</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors duration-200">Pricing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors duration-200">API Access</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase mb-4">Resources</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors duration-200">Documentation</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors duration-200">Guides</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors duration-200">Support Center</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors duration-200">Partners</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase mb-4">Contact</h3>
                    <ul class="space-y-3">
                        <li class="text-gray-400">
                            <a href="mailto:contact@nexus.com" class="hover:text-cyan-400 transition-colors duration-200">
                                contact@nexus.com
                            </a>
                        </li>
                        <li class="text-gray-400">
                            <a href="tel:+1234567890" class="hover:text-cyan-400 transition-colors duration-200">
                                +1 (234) 567-890
                            </a>
                        </li>
                        <li class="text-gray-400">
                            123 Innovation Street
                            <br>
                            Tech City, TC 12345
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-gray-400 text-sm">
                    © 2025 NEXUS. All rights reserved. Created by <a href="#" class="text-cyan-400 hover:text-cyan-300">@3ezzy</a>
                </div>
                <div class="flex space-x-6 text-sm">
                    <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors duration-200">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors duration-200">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors duration-200">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // GSAP Animations
        gsap.from("nav", { y: -100, opacity: 0, duration: 1, ease: "power3.out" });
        gsap.from(".hero-content", { y: 50, opacity: 0, duration: 1, delay: 0.5, ease: "power3.out" });
    </script>
</body>
</html>