<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXUS - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
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
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen">

    @include('partials.navigation')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>

    <script>
        function updateUTCTime() {
            const utcTime = document.getElementById('utc-time');
            if (!utcTime) return;
            setInterval(() => {
                const now = new Date();
                utcTime.textContent = now.toISOString().slice(0, 19).replace('T', ' ');
            }, 1000);
        }
        updateUTCTime();
    </script>

</body>
</html>