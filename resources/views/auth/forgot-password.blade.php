<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Mot de passe oublié? Aucun problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation de mot de passe qui vous permettra d\'en choisir un nouveau.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="relative float-label-input">
            <x-text-input-float-label id="email" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-label-float for="email" :value="__('E-mail')" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-full-rounded-button title="Lien de réinitialisation du mot de passe par e-mail">
                {{-- {{ __('Email Password Reset Link') }} --}}
                {{ __('Envoyer un lien') }}
            </x-full-rounded-button>
        </div>
    </form>
</x-guest-layout>
