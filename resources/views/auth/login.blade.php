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
            <x-text-input-float-label id="email" type="email" name="email" :value="old('email')" required autofocus
                autocomplete="off" />
            <x-input-label-float for="email" :value="__('E-mail')" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 font-inter pl-2 text-red-500 " />
        </div>

        {{-- Password --}}

        <div class="relative float-label-input mt-4">
            <x-text-input-float-label id="password" type="password" name="password" required
                autocomplete="current-password" />
            <x-input-label-float for="password" :value="__('Mot de passe')" />
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

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('password.request') }}">
                {{ __('Mot de passe oublié?') }}
            </a>

            <x-full-rounded-button class="ml-4">
                {{ __('Connexion') }}
            </x-full-rounded-button>
        </div>


    </form>
</x-guest-layout>
