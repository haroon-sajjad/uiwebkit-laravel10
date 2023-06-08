<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        {{-- Password --}}
        <div class="relative float-label-input">
            <x-text-input-float-label id="password" type="password" name="password" required
                autocomplete="current-password" />
            <x-input-label-float for="password" :value="__('Mot de passe')" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-full-rounded-button>
                {{-- __('Confirm') --}}
                {{ __('Confirmer') }}
            </x-full-rounded-button>
        </div>
    </form>
</x-guest-layout>
