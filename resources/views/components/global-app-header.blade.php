<header>
    <nav class="bg-backgroundColor h-20 flex items-center justify-between px-4 md:px-10">
        <button type="button" id="mobile-menu-button-open" class="block md:hidden">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3 7C2.44772 7 2 7.44772 2 8C2 8.55228 2.44772 9 3 9H21C21.5523 9 22 8.55228 22 8C22 7.44772 21.5523 7 21 7H3ZM3 15C2.44772 15 2 15.4477 2 16C2 16.5523 2.44772 17 3 17H21C21.5523 17 22 16.5523 22 16C22 15.4477 21.5523 15 21 15H3Z"
                    fill="#2B0B0B" />
            </svg>
        </button>
        <button type="button" id="mobile-menu-button-close" class="hidden md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        <div class="flex items-center gap-3 md:gap-5 ">
            <div class="">
                <x-application-logo></x-application-logo>

            </div>
            <div class="hidden md:block">
                <div class="flex items-center space-x-12 pl-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="{{ route('home') }}"
                        class=" text-primaryColor hover:border-b-2 w-16 whitespace-nowrap border-b-2 border-secondaryColor flex items-center justify-center font-bold  py-2 "
                        aria-current="page">UI Webkit</a>
                    <a href="#"
                        class="text-seborder-secondaryColor w-16 hover:border-b border-b border-transparent hover:border-secondaryColor   py-2 flex items-center justify-center whitespace-nowrap font-bold">Vidéos</a>
                    <a href="#"
                        class="text-seborder-secondaryColor w-16 hover:border-b border-b border-transparent hover:border-secondaryColor   py-2 flex items-center justify-center whitespace-nowrap  font-bold">Exemples</a>
                    <a href="#"
                        class="text-seborder-secondaryColor w-16  hover:border-b border-b border-transparent hover:border-secondaryColor   py-2 flex items-center whitespace-nowrap justify-center  font-bold">À
                        propos</a>
                    <a href="#"
                        class="text-seborder-secondaryColor w-16  hover:border-b border-b border-transparent hover:border-secondaryColor   py-2 flex items-center justify-center  font-bold">Blog</a>

                    <a href="{{ route('login') }}"
                        class="text-seborder-secondaryColor w-16  hover:border-b border-b border-transparent hover:border-secondaryColor   py-2 flex items-center justify-center  font-bold">{{ __('Connexion') }}</a>

                    <a href="{{ route('register') }}"
                        class="text-seborder-secondaryColor w-16  hover:border-b border-b border-transparent hover:border-secondaryColor   py-2 flex items-center justify-center  font-bold">{{ __('Enregistrer') }}</a>

                </div>
            </div>
        </div>
        <div class="flex items-center gap-6">
            <div class="hidden lg:block">
                <a href="#"
                    class="hover:opacity-75  bg-primaryColor text-white rounded-full px-5 py-3 font-medium">Download</a>
            </div>
            <div class="">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M15.6085 5.04504C12.4843 1.92084 7.419 1.92084 4.29481 5.04504C1.17061 8.16923 1.17061 13.2346 4.29481 16.3587C7.17953 19.2435 11.7192 19.4646 14.8576 17.0221L18.7905 20.9549C19.181 21.3455 19.8142 21.3455 20.2047 20.9549C20.5952 20.5644 20.5952 19.9313 20.2047 19.5407L16.2719 15.6079C18.7144 12.4694 18.4932 7.92976 15.6085 5.04504ZM14.1943 6.45925C16.5374 8.8024 16.5374 12.6014 14.1943 14.9445C11.8512 17.2877 8.05217 17.2877 5.70902 14.9445C3.36587 12.6014 3.36587 8.8024 5.70902 6.45925C8.05217 4.11611 11.8512 4.11611 14.1943 6.45925Z"
                        fill="#2B0B0B" />
                </svg>

            </div>
        </div>

    </nav>
    <div class="hidden sm:hidden" id="mobile-menu">
        <div class="px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#"
                class="text-primaryColor hover:border-b-primaryColor hover:text-white block rounded-md px-3 py-2 text-base font-medium"
                aria-current="page">UI Webkit</a>
            <a href="#"
                class="text-primaryColor hover:bg-primaryColor hover:text-white block rounded-md px-3 py-2 text-base font-medium">Vidéos</a>
            <a href="#"
                class="text-primaryColor hover:bg-primaryColor hover:text-white block rounded-md px-3 py-2 text-base font-medium">Exemples</a>
            <a href="#"
                class="text-primaryColor hover:bg-primaryColor hover:text-white block rounded-md px-3 py-2 text-base font-medium">À
                propos</a>
            <a href="#"
                class="text-primaryColor hover:bg-primaryColor hover:text-white block rounded-md px-3 py-2 text-base font-medium">Blog</a>

            <a href="{{ route('login') }}"
                class="text-primaryColor hover:bg-primaryColor hover:text-white block rounded-md px-3 py-2 text-base font-medium">{{ __('Connexion') }}</a>

            <a href="{{ route('register') }}"
                class="text-primaryColor hover:bg-primaryColor hover:text-white block rounded-md px-3 py-2 text-base font-medium">{{ __('Enregistrer') }}</a>

            <div class="mt-6">
                <a href="#"
                    class="hover:opacity-75 bg-primaryColor text-white rounded-full px-5 py-2 font-medium">Download</a>
            </div>
        </div>
    </div>
</header>
