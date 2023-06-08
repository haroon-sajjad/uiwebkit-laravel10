<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="text-5xl font-bold text-primaryColor leading-[64px]">
            {{ __('Connexion') }}
        </h1>
        {{-- Email Address --}}
        <div class="relative float-label-input">
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                autocomplete="off"
                class="block font-inter sm:w-96 w-full bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-xl py-3 px-3 appearance-none leading-normal focus:border-primaryColor mt-1" />
            <x-input-label for="email" :value="__('E-mail')"
                class="absolute font-inter top-3 left-0 text-gray-400 pointer-events-none transition duration-200 ease-in-outbg-white px-2 text-grey-darker" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 font-inter pl-2 text-red-500 " />
        </div>

        {{-- Password --}}

        <div class="relative float-label-input mt-4">

            <x-text-input id="password"
                class="block font-inter sm:w-96 w-full bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-xl py-3 px-3 appearance-none leading-normal focus:border-primaryColor mt-1"
                type="password" name="password" required autocomplete="current-password" />

            <x-input-label for="password" :value="__('Mot de passe')"
                class="absolute font-inter top-3 left-0 text-gray-400 pointer-events-none transition duration-200 ease-in-outbg-white px-2 text-grey-darker" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 font-inter pl-2 text-red-500" />
        </div>

        {{-- Remember Me --}}
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Souviens-toi de moi') }}</span>
            </label>
        </div>

        <div class="flex items-center mt-1">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié?') }}
                </a>
            @endif
        </div>
        <div class="flex items-center mt-2">
            <x-full-rounded-button>
                {{ __('Connexion') }}
            </x-full-rounded-button>
        </div>
    </form>
</x-guest-layout>
