<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- Name --}}
        <div class="relative float-label-input">
            <x-text-input-float-label id="name" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-label-float for="name" :value="__('Name')" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        {{-- Email Address --}}
        <div class="mt-4 relative float-label-input">
            <x-text-input-float-label id="email" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-label-float for="email" :value="__('E-mail')" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- Password --}}
        <div class="mt-4 relative float-label-input">
            <x-text-input-float-label id="password" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-label-float for="password" :value="__('Mot de passe')" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        {{-- Confirm Password --}}
        <div class="mt-4 relative float-label-input">
            <x-text-input-float-label id="password_confirmation" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-label-float for="password_confirmation" :value="__('Confirmez le mot de passe')" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{-- __('Already registered?') --}}
                {{ __('Déjà enregistré?') }}
            </a>

            <x-full-rounded-button class="ml-4">
                {{-- __('Register') --}}
                {{ __('Enregistrer') }}
            </x-full-rounded-button>
        </div>
    </form>
</x-guest-layout>
