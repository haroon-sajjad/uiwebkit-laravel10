<x-guest-layout>

    <div x-data="{ step: 1 }">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <h1 class="text-5xl font-bold text-primaryColor leading-[64px]">
                {{ __('Inscription') }}
            </h1>

            {{-- Step 1 --}}
            <div x-show="step === 1" x-transition>
                <div class="pt-6 pb-4 mt-1">
                    <label for="#">
                        <span class="font-inter">1/2</span> -
                        <span class="font-semibold">
                            {{ __('Vous êtes…') }}
                        </span>
                    </label>
                </div>

                <fieldset class="max-w-lg mx-auto ">
                    <div class="mt-4 sm:ml-6 ml-12 divide-y divide-backgroundColor border-b  border-backgroundColor">
                        <div class="relative flex items-start py-4">
                            <div class="absolute flex -left-8 h-6 items-center">
                                <input id="Designer_UX" name="plan" type="radio" checked
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="min-w-0 flex-1 text-sm leading-6">
                                <label for="Designer_UX" class="select-none font-normal text-gray-900 font-inter">
                                    {{ __('Designer UX') }}
                                </label>
                            </div>

                        </div>


                        <div class="relative flex items-start py-4">
                            <div class="absolute flex -left-8 h-6 items-center">
                                <input id="Designer_UI" name="plan" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="min-w-0 flex-1 text-sm leading-6">
                                <label for="Designer_UI" class="select-none font-normal text-gray-900 font-inter">
                                    {{ __('Designer UI') }}
                                </label>
                            </div>

                        </div>


                        <div class="relative flex items-start py-4">
                            <div class="absolute flex -left-8 h-6 items-center">
                                <input id="Developpeur_front" name="plan" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="min-w-0 flex-1 text-sm leading-6">
                                <label for="Developpeur_front" class="select-none font-normal text-gray-900 font-inter">
                                    {{ __('Développeur front') }}
                                </label>
                            </div>

                        </div>

                        <div class="relative flex items-start py-4">
                            <div class="absolute flex -left-8 h-6 items-center">
                                <input id="Developpeur_back" name="plan" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="min-w-0 flex-1 text-sm leading-6">
                                <label for="Developpeur_back" class="select-none font-normal text-gray-900 font-inter">
                                    {{ __('Développeur back') }}
                                </label>
                            </div>

                        </div>


                        <div class="relative flex items-start py-4">
                            <div class="absolute flex -left-8 h-6 items-center">
                                <input id="etudiant" name="plan" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="min-w-0 flex-1 text-sm leading-6">
                                <label for="etudiant" class="select-none font-normal text-gray-900 font-inter">
                                    {{ __('Étudiant') }}
                                </label>
                            </div>

                        </div>

                    </div>
                </fieldset>

                <button type="button"
                    class="bg-primaryColor py-3 px-4 mt-12 flex gap-3 items-center justify-end text-sm rounded-full text-white"
                    @click="step = 2">
                    {{ __('Question suivante') }}

                    <svg width="21" height="11" viewBox="0 0 21 11" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.2929 10.1923C14.6835 10.5829 15.3166 10.5829 15.7071 10.1923L19.9498 5.9497L20.0275 5.86247C20.3383 5.46996 20.3124 4.89811 19.9498 4.53548L15.7071 0.292842L15.6199 0.215136C15.2274 -0.0956898 14.6556 -0.069788 14.2929 0.292842L14.2152 0.380062C13.9044 0.77258 13.9303 1.34443 14.2929 1.70706L16.8285 4.24259L1.00003 4.24259C0.44775 4.24259 3.43323e-05 4.6903 3.43323e-05 5.24259C3.43323e-05 5.79487 0.44775 6.24259 1.00003 6.24259L16.8285 6.24259L14.2929 8.77812L14.2152 8.86534C13.9044 9.25786 13.9303 9.82971 14.2929 10.1923Z"
                            fill="#FEF9F8" />
                    </svg>

                </button>
            </div>
            {{-- Step 2 --}}

            {{-- Entering: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-full"
            To: "translate-x-0"
            Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-0"
            To: "translate-x-full" --}}
            <div 
                x-show="step === 2" x-transition>
                <div class="pt-6 pb-4 mt-1">
                    <label for="#"><span class="font-inter">2/2</span> -
                        <span class="font-semibold">
                            {{ __('Informations générales') }}
                        </span>
                    </label>
                </div>

                {{-- First Name --}}
                <div class="relative float-label-input">
                    <x-text-input-float-label id="first_name" type="text" name="first_name" :value="old('first_name')"
                        required autofocus autocomplete="first_name" />
                    <x-input-label-float for="first_name" :value="__('Prénom')" />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                {{-- Last Name --}}
                <div class="relative float-label-input">
                    <x-text-input-float-label id="last_name" type="text" name="last_name" :value="old('last_name')" required
                        autocomplete="last_name" />
                    <x-input-label-float for="last_name" :value="__('Nom')" />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                {{-- Email Address --}}
                <div class="mt-4 relative float-label-input">
                    <x-text-input-float-label id="email" type="email" name="email" :value="old('email')" required
                        autocomplete="username" />
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
                    <x-text-input-float-label id="password_confirmation" type="password" name="password_confirmation"
                        required autocomplete="new-password" />
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
            </div>
        </form>
    </div>
</x-guest-layout>
