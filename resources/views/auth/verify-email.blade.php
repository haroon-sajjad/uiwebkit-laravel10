<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{-- __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') --}}
        {{ __('Merci pour l\'enregistrement! Avant de commencer, pourriez-vous vérifier votre adresse e-mail en cliquant sur le lien que nous venons de vous envoyer? Si vous n\'avez pas reçu l\'e-mail, nous vous en enverrons un autre avec plaisir.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{-- __('A new verification link has been sent to the email address you provided during registration.') --}}
            {{ __('Un nouveau lien de vérification a été envoyé à l\'adresse e-mail que vous avez fournie lors de l\'inscription.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-full-rounded-button>
                    {{-- __('Resend Verification Email') --}}
                    {{ __('Renvoyer l\'e-mail de vérification') }}
                </x-full-rounded-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="inline-flex items-center px-4 py-3 bg-gray-800 border border-transparent bg-full-roundedColor rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                {{-- __('Log Out') --}}
                {{ __('Se déconnecter') }}
            </button>
        </form>
    </div>
</x-guest-layout>
