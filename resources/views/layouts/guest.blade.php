<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Tailwind via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-pink-50 via-purple-50 to-blue-50 relative font-sans antialiased">
    <!-- Animated background shapes -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute top-20 left-20 w-96 h-96 bg-gradient-to-br from-purple-400 to-pink-400 rounded-full opacity-20 animate-float blur-3xl"></div>
        <div class="absolute top-40 right-32 w-80 h-80 bg-gradient-to-br from-blue-400 to-cyan-400 rounded-full opacity-20 animate-float blur-3xl" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-32 left-40 w-72 h-72 bg-gradient-to-br from-green-400 to-emerald-400 rounded-full opacity-20 animate-float blur-3xl" style="animation-delay: 4s;"></div>
        <div class="absolute bottom-20 right-20 w-64 h-64 bg-gradient-to-br from-orange-400 to-yellow-400 rounded-full opacity-20 animate-float blur-3xl" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-rainbow rounded-full opacity-10 animate-spin-slow blur-3xl"></div>
    </div>

    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative z-10 min-h-screen w-full">
        <div class="mb-8">
            <a href="/" class="flex items-center space-x-3 group">
                <div class="w-16 h-16 bg-gradient-rainbow rounded-2xl flex items-center justify-center animate-pulse-slow shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold bg-gradient-rainbow bg-clip-text text-transparent animate-pulse-slow">
                    TaskBoard
                </h1>
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-glass backdrop-blur-glass shadow-2xl overflow-y-auto sm:rounded-2xl border border-gray-200 max-h-[80vh]">
            {{ $slot ?? '' }}
        </div>

        <!-- Back to home link -->
        <div class="mt-8 text-center">
            <a href="/" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-medium transition-colors duration-200">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Home
            </a>
        </div>
    </div>
</body>

</html>