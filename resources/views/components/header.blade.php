<header class="relative" x-data="{ open: false }">
    <div class="pt-6">
        <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
            <div class="flex items-center flex-1 justify-between">
                <div class="flex items-center flex-1">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="/">
                            <span class="sr-only">{{ __('67developer programozás') }}</span>
                            <img class="h-8 w-auto sm:h-10" src="{{ asset('images/67developer-logo.svg') }}" width="143" height="258" alt="67developer logo">
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button type="button" class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white" aria-expanded="false" :aria-expanded="open.toString()" @click="open=true">
                                <span class="sr-only">Open main menu</span>
                                <!-- Heroicon name: outline/menu -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="hidden space-x-8 md:flex md:ml-10">
                        <a href="/#szolgaltatasok" class="text-base font-medium text-white hover:text-gray-300">{{ __('Szolgáltatások') }}</a>

                        <a href="/#referencia" class="text-base font-medium text-white hover:text-gray-300">{{ __('Referencia') }}</a>

                        <a href="/#technologia" class="text-base font-medium text-white hover:text-gray-300">{{ __('Technologia') }}</a>

                        <a href="/#kapcsolat" class="text-base font-medium text-white hover:text-gray-300">{{ __('Kapcsolat') }}</a>
                    </div>
                </div>
                <div class="hidden space-x-4 md:flex">
                    <a href="https://github.com/rgergo67/67developer" class="block text-white hover:text-gray-300"><svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>GitHub</title><path d="M10 0a10 10 0 0 0-3.16 19.49c.5.1.68-.22.68-.48l-.01-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69a3.6 3.6 0 0 1 .1-2.64s.84-.27 2.75 1.02a9.58 9.58 0 0 1 5 0c1.91-1.3 2.75-1.02 2.75-1.02.55 1.37.2 2.4.1 2.64.64.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85l-.01 2.75c0 .26.18.58.69.48A10 10 0 0 0 10 0"></path></svg></a>

                    <a href="https://twitter.com/rgergo67" class="block text-white hover:text-gray-300"><svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Twitter</title><path d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path></svg></a>

                    @if (Lang::getLocale() == 'hu')
                        <a href="{{ route('welcome-en') }}" class="font-medium text-base text-white hover:text-gray-300">EN</a>
                    @else
                        <a href="{{ route('welcome') }}" class="font-medium text-base text-white hover:text-gray-300">HU</a>
                    @endif
                </div>
            </div>
        </nav>
    </div>

    <div x-show="open" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 inset-x-0 p-2 transition transform origin-top md:hidden" x-ref="panel" @click.away="open = false" style="display: none;">
        <div class="rounded-lg shadow-md bg-gradient-to-br from-retrodark to-retropurple-dark ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                    <img class="h-8 w-auto" src="{{ asset('images/67developer-logo.svg') }}" alt="{{ __('67developer programozás') }}">
                </div>
                <div class="-mr-2">
                    <button type="button" class="bg-gradient-to-b from-retropurple-light to-retroyellow rounded-md p-2 inline-flex items-center justify-center text-retrodark hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-600" @click="open = false">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="pt-5 pb-6">
                <div class="px-5 space-y-4 bg-gradient-to-r from-retroyellow to-retropink bg-clip-text">

                    <a href="/#szolgaltatasok" class="block rounded-md text-base font-medium text-transparent">{{ __('Szolgáltatások') }}</a>

                    <a href="/#referencia" class="block rounded-md text-base font-medium text-transparent">{{ __('Referencia') }}</a>

                    <a href="/#technologia" class="block rounded-md text-base font-medium text-transparent">{{ __('Technológia') }}</a>

                    <a href="/#kapcsolat" class="block rounded-md text-base font-medium text-transparent">{{ __('Kapcsolat') }}</a>

                    <div class="space-x-6 flex pt-2">
                        <a href="https://github.com/rgergo67/67developer" class="block hover:text-gray-600"><svg class="fill-white w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>GitHub</title><path d="M10 0a10 10 0 0 0-3.16 19.49c.5.1.68-.22.68-.48l-.01-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69a3.6 3.6 0 0 1 .1-2.64s.84-.27 2.75 1.02a9.58 9.58 0 0 1 5 0c1.91-1.3 2.75-1.02 2.75-1.02.55 1.37.2 2.4.1 2.64.64.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85l-.01 2.75c0 .26.18.58.69.48A10 10 0 0 0 10 0"></path></svg></a>

                        <a href="https://twitter.com/rgergo67" class="block hover:text-gray-600"><svg class="fill-white w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Twitter</title><path d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path></svg></a>

                        <a href="{{ route('welcome-en') }}" class="text-white">EN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
