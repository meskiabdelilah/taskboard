<section class="space-y-6">
    <div class="bg-white/30 p-6 rounded-2xl border border-gray-200 shadow hover:shadow-lg transition-shadow">
        <header class="flex items-start gap-4">
            <div class="p-3 bg-indigo-50 text-indigo-600 rounded-lg flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>

            <div>
                <h2 class="text-2xl font-bold bg-gradient-rainbow bg-clip-text text-transparent">
                    {{ __('Update Password') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600 leading-relaxed">
                    {{ __('Ensure your account is using a long, random password to stay secure.') }}
                </p>
            </div>
        </header>

        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div class="animate-fade-in">
                <x-input-label for="update_password_current_password" :value="__('Current Password')" class="text-purple-700 font-semibold mb-1 ml-1" />
                <x-text-input id="update_password_current_password" name="current_password" type="password"
                    class="mt-1 block w-full px-4 py-3 bg-white/60 border-purple-100 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all duration-300"
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>

            <div class="animate-fade-in" style="animation-delay: 0.2s;">
                <x-input-label for="update_password_password" :value="__('New Password')" class="text-purple-700 font-semibold mb-1 ml-1" />
                <x-text-input id="update_password_password" name="password" type="password"
                    class="mt-1 block w-full px-4 py-3 bg-white/60 border-purple-100 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all duration-300"
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>


            <div class="animate-fade-in" style="animation-delay: 0.4s;">
                <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" class="text-purple-700 font-semibold mb-1 ml-1" />
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"
                    class="mt-1 block w-full px-4 py-3 bg-white/60 border-purple-100 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all duration-300"
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center gap-4 pt-2">
                <button type="submit"
                    class="bg-gradient-rainbow text-white px-6 py-3 rounded-lg font-bold shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                    {{ __('Save') }}
                </button>

                @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600 font-medium">
                    ✓ {{ __('Password updated successfully!') }}
                </p>
                @endif
            </div>
        </form>
    </div>
</section>