<header class="relative" x-data="{ open: false }">
    <div class="pt-6">
        <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
            <div class="flex items-center flex-1">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="/">
                        <span class="sr-only">Workflow</span>
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
                    <a href="/#szolgaltatasok" class="text-base font-medium text-white hover:text-gray-300">Szolgáltatások</a>

                    <a href="/#referencia" class="text-base font-medium text-white hover:text-gray-300">Referencia</a>

                    <a href="/#technologia" class="text-base font-medium text-white hover:text-gray-300">Technologia</a>

                    <a href="/#kapcsolat" class="text-base font-medium text-white hover:text-gray-300">Kapcsolat</a>
                </div>
            </div>
        </nav>
    </div>

    <div x-show="open" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 inset-x-0 p-2 transition transform origin-top md:hidden" x-ref="panel" @click.away="open = false" style="display: none;">
        <div class="rounded-lg shadow-md bg-gradient-to-br from-retrodark to-retropurple-dark ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                    <img class="h-8 w-auto" src="{{ asset('images/67developer-logo.svg') }}" alt="67developer programozás">
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
                <div class="px-2 space-y-1 bg-gradient-to-r from-retroyellow to-retropink bg-clip-text">

                    <a href="/#szolgaltatasok" class="block px-3 py-2 rounded-md text-base font-medium text-transparent">Szolgáltatások</a>

                    <a href="/#referencia" class="block px-3 py-2 rounded-md text-base font-medium text-transparent">Referencia</a>

                    <a href="/#technologia" class="block px-3 py-2 rounded-md text-base font-medium text-transparent">Technológia</a>

                    <a href="/#kapcsolat" class="block px-3 py-2 rounded-md text-base font-medium text-transparent">Kapcsolat</a>

                </div>
            </div>
        </div>
    </div>
</header>
