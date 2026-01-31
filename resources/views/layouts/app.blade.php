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

    <div class="relative z-10 flex-1">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main class="flex-1">
            @isset($slot)
            {{ $slot }}
            @else
            @yield('content')
            @endisset
        </main>
    </div>
</body>

</html>