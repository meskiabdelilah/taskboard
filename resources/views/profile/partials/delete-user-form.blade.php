<section class="space-y-6">
    <div class="bg-white/30 p-6 rounded-2xl border border-gray-200 shadow hover:shadow-lg transition-shadow">
        <header class="flex items-start gap-4">
            <div class="p-3 bg-red-50 text-red-600 rounded-lg flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </div>

            <div>
                <h2 class="text-2xl font-bold bg-gradient-rainbow bg-clip-text text-transparent">
                    {{ __('Delete Account') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600 leading-relaxed">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
                </p>
            </div>
        </header>


        <div class="mt-6">
            <button
                x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                class="bg-gradient-to-r from-red-600 to-red-500 text-white px-8 py-3 rounded-lg font-bold shadow-md hover:from-red-700 hover:to-red-600 hover:shadow-lg transition-all duration-300">
                {{ __('Delete Account') }}
            </button>
        </div>


        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
            <div class="bg-white/90 backdrop-blur-xl p-8 rounded-2xl border border-red-100 shadow-2xl">
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')

                    <h2 class="text-xl font-bold text-gray-800">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h2>

                    <p class="mt-3 text-sm text-gray-600">
                        {{ __('Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <div class="mt-6">
                        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                        <input
                            id="password"
                            name="password"
                            type="password"
                            class="mt-1 block w-full px-4 py-3 bg-gray-50 border-gray-200 rounded-xl focus:border-red-500 focus:ring-red-200 transition-all shadow-sm"
                            placeholder="{{ __('Enter your password to confirm...') }}" />

                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-8 flex justify-end gap-3">
                        <button type="button" x-on:click="$dispatch('close')"
                            class="px-6 py-2.5 rounded-xl text-gray-600 font-semibold hover:bg-gray-100 transition-all">
                            {{ __('Cancel') }}
                        </button>


                        <button type="submit"
                            class="bg-red-600 text-white px-8 py-2.5 rounded-xl font-bold shadow-lg hover:bg-red-700 hover:shadow-red-200 transition-all">
                            {{ __('Confirm Deletion') }}
                        </button>
                    </div>
                </form>
            </div>
        </x-modal>
    </div>
</section>