<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="w-full max-w-md pb-8">
        <!-- Logo and Title -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-rainbow rounded-2xl mb-4 animate-pulse-slow">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                </svg>
            </div>
            <h1 class="text-3xl font-bold bg-gradient-rainbow bg-clip-text text-transparent animate-pulse-slow mb-2">
                Welcome Back
            </h1>
            <p class="text-gray-600">Sign in to your TaskBoard account</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                    Email Address
                </label>
                <input id="email" 
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200" 
                       type="email" 
                       name="email" 
                       :value="old('email')" 
                       required 
                       autofocus 
                       autocomplete="username"
                       placeholder="Enter your email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                    Password
                </label>
                <input id="password" 
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200"
                       type="password"
                       name="password"
                       required 
                       autocomplete="current-password"
                       placeholder="Enter your password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input id="remember_me" 
                       type="checkbox" 
                       class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500" 
                       name="remember">
                <label for="remember_me" class="ml-2 text-sm text-gray-600">
                    Remember me
                </label>
            </div>

            <!-- Forgot Password & Login Button -->
            <div class="space-y-4">
                @if (Route::has('password.request'))
                    <div class="text-center">
                        <a class="text-sm text-purple-600 hover:text-purple-700 font-medium transition-colors duration-200" 
                           href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    </div>
                @endif

                <div class="pt-2">
                    <button type="submit" 
                            class="w-full bg-gradient-rainbow text-white py-4 px-4 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-200 animate-shimmer">
                        Sign In
                    </button>
                </div>
            </div>
        </form>

        <!-- Register Link -->
        <div class="text-center mt-8">
            <p class="text-gray-600">
                Don't have an account?
                <a href="{{ route('register') }}" 
                   class="text-purple-600 hover:text-purple-700 font-semibold transition-colors duration-200">
                    Sign up for free
                </a>
            </p>
        </div>
    </div>
</x-guest-layout>
