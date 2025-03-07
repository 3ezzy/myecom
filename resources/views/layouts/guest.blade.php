<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'NEXUS' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Space Grotesk', sans-serif; }
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
    </style>
</head>
<body class="bg-gray-900 min-h-screen">
    <div class="animate-gradient absolute inset-0 opacity-20"></div>
    <div class="relative min-h-screen flex flex-col items-center justify-center p-4">
        <a href="{{ url('/') }}" class="absolute top-4 left-4 text-gray-400 hover:text-white flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            <span>Back to Home</span>
        </a>
        
        {{ $slot }}
    </div>
   
</body>
</html>