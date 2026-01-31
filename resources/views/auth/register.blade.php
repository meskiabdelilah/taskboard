<x-guest-layout>
    <div class="w-full max-w-md pb-8">
        <!-- Logo and Title -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-rainbow rounded-2xl mb-4 animate-pulse-slow">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
            </div>
            <h1 class="text-3xl font-bold bg-gradient-rainbow bg-clip-text text-transparent animate-pulse-slow mb-2">
                Create Account
            </h1>
            <p class="text-gray-600">Start organizing your tasks in minutes</p>
        </div>

        <!-- Register Form -->
        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                    Full Name
                </label>
                <input id="name" 
                       type="text" 
                       name="name" 
                       required 
                       autofocus
                       value="{{ old('name') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200"
                       placeholder="Enter your full name">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                    Email Address
                </label>
                <input id="email" 
                       type="email" 
                       name="email" 
                       required
                       value="{{ old('email') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200"
                       placeholder="Enter your email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                    Password
                </label>
                <input id="password" 
                       type="password" 
                       name="password" 
                       required
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200"
                       placeholder="Create a password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                    Confirm Password
                </label>
                <input id="password_confirmation" 
                       type="password" 
                       name="password_confirmation" 
                       required
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200"
                       placeholder="Confirm your password">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
                <button type="submit"
                        class="w-full bg-gradient-rainbow text-white py-4 px-4 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-200 animate-shimmer">
                    Create Account
                </button>
            </div>
        </form>

        <!-- Login Link -->
        <div class="text-center mt-8">
            <p class="text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}" 
                   class="text-purple-600 hover:text-purple-700 font-semibold transition-colors duration-200">
                    Sign in here
                </a>
            </p>
        </div>
    </div>
</x-guest-layout>
