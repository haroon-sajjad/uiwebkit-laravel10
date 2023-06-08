<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        {{-- Password Reset Token --}}
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        {{-- Email Address --}}
        <div class="relative float-label-input">
            <x-text-input-float-label id="email" type="email" name="email" placeholder=" " :value="old('email', $request->email)" required autofocus
                autocomplete="username" />
            <x-input-label-float for="email" :value="__('E-mail')" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- Password --}}
        <div class="mt-4 relative float-label-input">
            <x-text-input-float-label id="password" type="password" name="password" placeholder=" " required
                autocomplete="new-password" />
            <x-input-label-float for="password" :value="__('Mot de passe')" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        {{-- Confirm Password --}}
        <div class="mt-4 relative float-label-input">

            <x-text-input-float-label id="password_confirmation" type="password" name="password_confirmation" placeholder=" " required
                autocomplete="new-password" />
            <x-input-label-float for="password_confirmation" :value="__('Confirmez le mot de passe')" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-full-rounded-button>
                {{ __('Reset Password') }}
            </x-full-rounded-button>
        </div>
    </form>
</x-guest-layout>
