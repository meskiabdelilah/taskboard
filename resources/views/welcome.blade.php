<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TaskBoard – Organize your workflow</title>

    <!-- Tailwind via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-pink-50 via-purple-50 to-blue-50 min-h-screen relative">
    <!-- Animated background shapes -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute top-20 left-20 w-96 h-96 bg-gradient-to-br from-purple-400 to-pink-400 rounded-full opacity-20 animate-float blur-3xl"></div>
        <div class="absolute top-40 right-32 w-80 h-80 bg-gradient-to-br from-blue-400 to-cyan-400 rounded-full opacity-20 animate-float blur-3xl" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-32 left-40 w-72 h-72 bg-gradient-to-br from-green-400 to-emerald-400 rounded-full opacity-20 animate-float blur-3xl" style="animation-delay: 4s;"></div>
        <div class="absolute bottom-20 right-20 w-64 h-64 bg-gradient-to-br from-orange-400 to-yellow-400 rounded-full opacity-20 animate-float blur-3xl" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-rainbow rounded-full opacity-10 animate-spin-slow blur-3xl"></div>
    </div>

    <!-- NAVBAR -->
    <header class="bg-glass backdrop-blur-glass border-b border-gray-200 sticky top-0 z-50 relative">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-gradient-rainbow rounded-lg flex items-center justify-center animate-pulse-slow">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold bg-gradient-rainbow bg-clip-text text-transparent animate-pulse-slow">TaskBoard</h1>
            </div>

            <nav class="flex items-center space-x-6">
                @auth
                <a href="/dashboard" class="text-gray-700 font-medium hover:text-purple-600 transition-colors duration-200">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-purple-600 transition-colors duration-200 font-medium">
                    Login
                </a>
                <a href="{{ route('register') }}"
                    class="bg-gradient-rainbow text-white px-6 py-2.5 rounded-full font-medium hover:shadow-lg transform hover:scale-105 transition-all duration-200 animate-shimmer">
                    Register
                </a>
                @endauth
            </nav>
        </div>
    </header>

    <!-- HERO Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-20 w-72 h-72 bg-purple-300 rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-300 rounded-full filter blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center relative z-10">

            <!-- Left: Text -->
            <div class="space-y-8 animate-fade-in">
                <div class="space-y-4">
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-purple-100 to-pink-100 text-purple-700 rounded-full text-sm font-medium border border-purple-200">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        #1 Task Management Platform
                    </div>
                    <h2 class="text-5xl lg:text-6xl font-bold leading-tight text-gray-900">
                        Organize tasks with
                        <span class="bg-gradient-rainbow bg-clip-text text-transparent">clarity.</span>
                    </h2>
                </div>

                <p class="text-xl text-gray-600 leading-relaxed max-w-lg">
                    TaskBoard empowers you to plan, track and complete work with clean boards,
                    powerful features, and a beautifully simple interface — all in one place.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('register') }}"
                        class="bg-gradient-rainbow text-white px-8 py-4 rounded-full font-semibold hover:shadow-xl transform hover:scale-105 transition-all duration-200 text-center animate-shimmer">
                        Get Started for Free
                        <svg class="w-5 h-5 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>

                    <a href="{{ route('login') }}"
                        class="border-2 border-purple-600 text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gradient-to-r hover:from-purple-50 hover:to-pink-50 transition-all duration-200 text-center">
                        Login
                    </a>
                </div>

                <!-- Trust indicators -->
                <div class="flex items-center space-x-6 pt-4">
                    <div class="flex -space-x-2">
                        <div class="w-8 h-8 bg-purple-200 rounded-full border-2 border-white"></div>
                        <div class="w-8 h-8 bg-blue-200 rounded-full border-2 border-white"></div>
                        <div class="w-8 h-8 bg-green-200 rounded-full border-2 border-white"></div>
                        <div class="w-8 h-8 bg-yellow-200 rounded-full border-2 border-white"></div>
                    </div>
                    <p class="text-sm text-gray-600">
                        <span class="font-semibold">10,000+</span> teams trust TaskBoard
                    </p>
                </div>
            </div>

            <!-- Right: Illustration / Mockup -->
            <div class="relative animate-float">
                <div class="bg-glass backdrop-blur-glass shadow-2xl rounded-2xl p-8 border border-gray-200">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-semibold text-gray-800">Project Dashboard</h3>
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                            <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                            <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-4 rounded-xl border border-purple-200">
                            <p class="font-semibold text-sm text-purple-800 mb-3">To Do</p>
                            <div class="space-y-2">
                                <div class="bg-white p-3 rounded-lg shadow-sm text-sm hover:-translate-y-1 hover:shadow-md transition-all duration-300 cursor-pointer">
                                    <div class="w-2 h-2 bg-purple-400 rounded-full mb-2"></div>
                                    Design taskboard
                                </div>
                                <div class="bg-white p-3 rounded-lg shadow-sm text-sm hover:-translate-y-1 hover:shadow-md transition-all duration-300 cursor-pointer">
                                    <div class="w-2 h-2 bg-blue-400 rounded-full mb-2"></div>
                                    User research
                                </div>
                            </div>
                        </div>
                        <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-4 rounded-xl border border-yellow-200">
                            <p class="font-semibold text-sm text-yellow-800 mb-3">In Progress</p>
                            <div class="space-y-2">
                                <div class="bg-white p-3 rounded-lg shadow-sm border-l-4 border-yellow-500 text-sm hover:-translate-y-1 hover:shadow-md transition-all duration-300 cursor-pointer">
                                    Build backend API
                                </div>
                                <div class="bg-white p-3 rounded-lg shadow-sm border-l-4 border-orange-500 text-sm hover:-translate-y-1 hover:shadow-md transition-all duration-300 cursor-pointer">
                                    Database setup
                                </div>
                            </div>
                        </div>
                        <div class="bg-gradient-to-br from-green-50 to-green-100 p-4 rounded-xl border border-green-200">
                            <p class="font-semibold text-sm text-green-800 mb-3">Done</p>
                            <div class="space-y-2">
                                <div class="bg-white p-3 rounded-lg shadow-sm border-l-4 border-green-500 text-sm hover:-translate-y-1 hover:shadow-md transition-all duration-300 cursor-pointer">
                                    DB migrations
                                </div>
                                <div class="bg-white p-3 rounded-lg shadow-sm border-l-4 border-green-500 text-sm hover:-translate-y-1 hover:shadow-md transition-all duration-300 cursor-pointer">
                                    UI mockups
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Decorative elements -->
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-purple-200 rounded-full opacity-20 blur-xl"></div>
                <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-blue-200 rounded-full opacity-20 blur-xl"></div>
            </div>

        </div>
    </section>

    <!-- FEATURES -->
    <section class="py-20 bg-gradient-to-b from-white to-purple-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center space-y-6 mb-16">
                <h3 class="text-4xl font-bold text-gray-900">
                    Build better workflows
                </h3>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Powerful features designed to help your team collaborate more effectively and ship products faster.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="group p-8 bg-white rounded-2xl shadow-lg hover:-translate-y-1 hover:shadow-2xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-blue rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-xl mb-4 text-gray-900">Visual Boards</h4>
                    <p class="text-gray-600 leading-relaxed">
                        See all your tasks at a glance with smart columns and customizable workflows that adapt to your team's needs.
                    </p>
                </div>

                <div class="group p-8 bg-white rounded-2xl shadow-lg hover:-translate-y-1 hover:shadow-2xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-green rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-xl mb-4 text-gray-900">Drag & Drop</h4>
                    <p class="text-gray-600 leading-relaxed">
                        Easily reorganize work between lists or statuses with intuitive drag-and-drop functionality.
                    </p>
                </div>

                <div class="group p-8 bg-white rounded-2xl shadow-lg hover:-translate-y-1 hover:shadow-2xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-orange rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-xl mb-4 text-gray-900">Secure</h4>
                    <p class="text-gray-600 leading-relaxed">
                        Your tasks are private and safe with enterprise-grade security and encrypted data storage.
                    </p>
                </div>
            </div>

            <!-- Additional features row -->
            <div class="grid md:grid-cols-3 gap-8 mt-8">
                <div class="group p-8 bg-white rounded-2xl shadow-lg hover:-translate-y-1 hover:shadow-2xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-pink rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-xl mb-4 text-gray-900">Real-time Updates</h4>
                    <p class="text-gray-600 leading-relaxed">
                        Stay in sync with your team through instant updates and live collaboration features.
                    </p>
                </div>

                <div class="group p-8 bg-white rounded-2xl shadow-lg hover:-translate-y-1 hover:shadow-2xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-xl mb-4 text-gray-900">Analytics</h4>
                    <p class="text-gray-600 leading-relaxed">
                        Track progress and productivity with detailed insights and performance metrics.
                    </p>
                </div>

                <div class="group p-8 bg-white rounded-2xl shadow-lg hover:-translate-y-1 hover:shadow-2xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-rainbow rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-xl mb-4 text-gray-900">Customizable</h4>
                    <p class="text-gray-600 leading-relaxed">
                        Tailor workflows, fields, and automations to match your unique team processes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="bg-gradient-purple text-white py-20 relative overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-10 right-20 w-64 h-64 bg-white rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-10 left-20 w-48 h-48 bg-white rounded-full filter blur-2xl"></div>
        </div>

        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <div class="space-y-8">
                <div class="space-y-4">
                    <h4 class="text-4xl md:text-5xl font-bold">
                        Ready to get organized?
                    </h4>
                    <p class="text-xl text-purple-100 max-w-2xl mx-auto">
                        Join thousands of teams already using TaskBoard to streamline their workflows and boost productivity.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="{{ route('register') }}"
                        class="bg-white text-purple-600 px-8 py-4 rounded-full font-bold hover:shadow-2xl transform hover:scale-105 transition-all duration-200 text-center">
                        Start Free Today
                        <svg class="w-5 h-5 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>

                    <div class="flex items-center space-x-4 text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">No credit card required</span>
                    </div>
                </div>

                <!-- Social proof -->
                <div class="flex justify-center items-center space-x-8 pt-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold">10K+</div>
                        <div class="text-sm text-purple-200">Active Users</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold">500+</div>
                        <div class="text-sm text-purple-200">Teams</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold">99.9%</div>
                        <div class="text-sm text-purple-200">Uptime</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-gray-300 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-gradient-purple rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white">TaskBoard</h3>
                    </div>
                    <p class="text-sm">
                        The modern way to manage tasks and collaborate with your team.
                    </p>
                </div>

                <div>
                    <h4 class="font-semibold text-white mb-4">Product</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">Features</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Pricing</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Integrations</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Changelog</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-white mb-4">Company</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">About</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-white mb-4">Support</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Documentation</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">API</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Status</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm mb-4 md:mb-0">
                    &copy; {{ date('Y') }} TaskBoard. All rights reserved.
                </p>

                <div class="flex space-x-6">
                    <a href="#" class="hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#" class="hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                    <a href="#" class="hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.373 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>