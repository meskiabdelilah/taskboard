<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl bg-gradient-rainbow bg-clip-text text-transparent">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 relative overflow-hidden">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 relative z-10">
            <div class="p-6 sm:p-10 bg-white/40 backdrop-blur-glass border border-white/20 shadow-2xl rounded-3xl transition-all duration-300 hover:shadow-purple-200/50">
                <div class="max-w-2xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <div class="p-6 sm:p-10 bg-white/40 backdrop-blur-glass border border-white/20 shadow-2xl rounded-3xl transition-all duration-300 hover:shadow-pink-200/50">
                <div class="max-w-2xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
            <div class="p-6 sm:p-10 bg-red-50/30 backdrop-blur-glass border border-red-100/50 shadow-2xl rounded-3xl transition-all duration-300">
                <div class="max-w-2xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>