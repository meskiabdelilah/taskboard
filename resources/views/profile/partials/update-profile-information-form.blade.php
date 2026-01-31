<section class="space-y-6">
    <div class="bg-white/30 p-6 rounded-2xl border border-gray-200 shadow hover:shadow-lg transition-shadow">
        <header class="flex items-start gap-4">
            <div class="p-3 bg-purple-50 text-purple-600 rounded-lg flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>

            <div>
                <h2 class="text-2xl font-bold bg-gradient-rainbow bg-clip-text text-transparent">
                    {{ __('Profile Information') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600 leading-relaxed">
                    {{ __("Update your account's profile information and email address.") }}
                </p>
            </div>
        </header>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')


            <div class="animate-fade-in">
                <x-input-label for="name" :value="__('Name')" class="text-purple-700 font-semibold mb-1 ml-1" />
                <x-text-input id="name" name="name" type="text"
                    class="mt-1 block w-full px-4 py-3 bg-white/50 border-purple-100 rounded-xl focus:border-purple-500 focus:ring focus:ring-purple-200 focus:ring-opacity-50 transition-all duration-300 shadow-sm"
                    :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="animate-fade-in" style="animation-delay: 0.2s;">
                <x-input-label for="email" :value="__('Email')" class="text-purple-700 font-semibold mb-1 ml-1" />
                <x-text-input id="email" name="email" type="email"
                    class="mt-1 block w-full px-4 py-3 bg-white/50 border-purple-100 rounded-xl focus:border-purple-500 focus:ring focus:ring-purple-200 focus:ring-opacity-50 transition-all duration-300 shadow-sm"
                    :value="old('email', $user->email)" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-4 p-4 bg-orange-50 rounded-xl border border-orange-100">
                    <p class="text-sm text-orange-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-purple-600 hover:text-purple-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-colors">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                    @endif
                </div>
                @endif
            </div>

            <div class="flex items-center gap-4 pt-2">
                <button type="submit"
                    class="bg-gradient-rainbow text-white px-6 py-3 rounded-lg font-bold shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                    {{ __('Save') }}
                </button>

                @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600 font-medium animate-pulse">
                    {{ __('Saved successfully!') }}
                </p>
                @endif
            </div>
        </form>
    </div>
</section>