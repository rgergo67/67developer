<x-frontend-layout>
    <div class="bg-white">
        <div class="relative overflow-hidden">
            <main>
                <div class="bg-gradient-to-r from-black via-retropurple-dark to-retropurple-light bg-gradient-to-br ">
                    <x-header />
                    <div class="pt-10 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
                        <div class="mx-auto max-w-7xl lg:px-8">
                            <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                                <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                                    <div class="lg:py-24">
                                        <a href="/#referencia" class="inline-flex items-center text-white bg-black rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
                                            <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-gradient-to-r from-teal-500 to-cyan-600 rounded-full">{{ __('Referencia') }}</span>
                                            <span class="ml-4 text-sm">{{ __('1-2 példa') }}</span>
                                            <!-- Heroicon name: solid/chevron-right -->
                                            <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <h1 class="mt-6 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-5xl xl:leading-[1.2]">
                                            <span class="block">{{ __('Gergő vagyok,') }}</span>
                                            <span class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-teal-200 to-cyan-400 sm:pb-5">{{ __('weboldalakat készítek') }}</span>
                                        </h1>
                                        <div class="mt-4 text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">
                                            <p>{{ __('Elavult, lassú, hibásan működő weboldalakat és rendszereket javítok, teszek ismét korszerűvé és villámgyorssá.') }}</p>
                                            <p class="mt-4">{{ __('Legyenek a folyamataid gyorsak, modernek, hatékonyak!') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-12 lg:m-0 lg:relative">
                                    <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                                        <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
                                        <img class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="{{ asset('images/67developer-header.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature section with grid -->
                <div class="relative bg-white py-16 sm:py-24 lg:py-32">
                    <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                        <h2 id="szolgaltatasok" class="text-base font-semibold tracking-wider text-cyan-600 uppercase">{{ __('Szolgáltatások') }}</h2>
                        <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                            {{ __('Akkor tudok segíteni, ha...') }}
                        </p>
                        <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
                            {{ __('... egyéni vállalkozásod van, nonprofit szervezetben dolgozol, vagy nagyvállalatot vezetsz. Ha elég érdekes a feladat, el fogom vállalni.') }}
                        </p>
                        <div class="mt-12">
                            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                                <div class="pt-6">
                                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                        <div class="-mt-6">
                                            <div>
                      <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-md shadow-lg">
                        <!-- Heroicon name: outline/cloud-upload -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>
                      </span>
                                            </div>
                                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">{{ __('Digitalizáció') }}</h3>
                                            <div class="mt-5 text-base text-gray-500">

                                                <p>{{ __('A papír vagy excel alapú folyamatok többnyire digitalizálhatóak. Végezze egy gép az unalmas, repetatív munkát!') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-6">
                                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                        <div class="-mt-6">
                                            <div>
                      <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-md shadow-lg">
                        <!-- Heroicon name: outline/lock-closed -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                      </span>
                                            </div>
                                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">{{ __('Weboldal korszerüsítés') }}</h3>
                                            <div class="mt-5 text-base text-gray-500">
                                                <p>{{ __('Lassú, évek óta nem frissített webes rendszereket javítok, optimalizálok, teszek villámgyorssá és biztonságossá.') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-6">
                                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                        <div class="-mt-6">
                                            <div>
                      <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-md shadow-lg">
                        <!-- Heroicon name: outline/refresh -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                      </span>
                                            </div>
                                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">{{ __('Tanácsadás') }}</h3>
                                            <div class="mt-5 text-base text-gray-500">
                                                <p>{{ __('Segítek feltérképezni a vállalkozásodban rejlő digitális potenciált 10+ év fejlesztési tapasztalatával.') }}</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-l from-retropurple-light via-retropurple-dark to-black bg-gradient-to-bl">
                    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
                        <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
                            <div class="space-y-5 sm:space-y-4">
                                <h2 id="referencia" class="inline-flex bg-clip-text text-transparent bg-gradient-to-r from-retroyellow to-retroyellow-dark text-3xl font-extrabold tracking-tight sm:text-4xl">{{ __('Referencia') }}</h2>
                                <p class="text-xl text-gray-300">{{ __('Leggyakrabban belső ügyviteli rendszereket fejlesztek, így nem tudom őket közvetlenül megmutatni, de olyan is akad, amit meg tudsz nézni.') }}</p>
                            </div>
                            <div class="lg:col-span-2">
                                <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:gap-x-8">
                                    <x-reference title="Pannon Egyetem"
                                                 image="{{ asset('images/referencia/pannon.jpg') }}">
                                        <p>{{ __('Több ezer diák, dolgozó és partner adatainak és jogosultságainak automatizált kezelése, M365 és LDAP szinkronizáció, és rengeteg egyedi fejlesztés, kihívás.') }}</p>
                                        <ul class="mt-2">
                                            <li><a href="https://balatoninyariegyetem.uni-pannon.hu" target="_blank" class="text-retroyellow">Balatoni Nyári Egyetem</a></li>
                                            <li><a href="https://felveteli.uni-pannon.hu" target="_blank" class="text-retroyellow">Felvételi</a></li>
                                        </ul>
                                    </x-reference>

                                    <x-reference title="Akzonobel festékgyár"
                                                 image="{{ asset('images/referencia/akzonobel.jpg') }}">
                                        <p>{{ __('Belső webshop a kis és nagykereskedők felé, valamint egyedi CRM rendszer a képviselőknek.') }}</p>
                                        <x-slot name="badges">
                                            <x-badge>LaravelBackpack</x-badge>
                                            <x-badge>TailwindCss</x-badge>
                                        </x-slot>
                                    </x-reference>

                                    <x-reference title="Mancsmeg.hu"
                                                 link="https://mancsmeg.hu"
                                                 image="{{ asset('images/referencia/mancsmeg.png') }}">
                                        <p>{{ __('Saját nonprofit projekt, örökbefogadható állatok országos adatbázisa.') }}</p>

                                        <x-slot name="badges">
                                            <x-badge>Forge</x-badge>
                                            <x-badge>LaravelBackpack</x-badge>
                                            <x-badge>TailwindCss</x-badge>
                                            <x-badge>AlpineJs</x-badge>
                                        </x-slot>
                                    </x-reference>

                                    <x-reference title="Beosztom.hu"
                                                 link="https://beosztom.hu"
                                                 image="{{ asset('images/referencia/beosztom.jpg') }}">
                                        <p>{{ __('Családi költségvetés tervező alkalmazás.') }}</p>
                                        <x-slot name="badges">
                                            <x-badge>Forge</x-badge>
                                            <x-badge>Livewire</x-badge>
                                            <x-badge>TailwindCss</x-badge>
                                        </x-slot>
                                    </x-reference>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="bg-indigo-200 bg-opacity-25">
                    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                        <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                            <div class="lg:col-span-1">
                                <h2 id="technologia" class="text-base font-semibold tracking-wider text-cyan-600 uppercase">
                                    {{ __('Technológia') }}
                                </h2>
                                <p class="text-gray-900 text-3xl font-extrabold tracking-tight sm:text-4xl">
                                    {{ __('Ezeket használom') }}
                                </p>

                                <p class="text-xl mt-3 text-gray-800">Laravel, TailwindCSS, AlpineJs, Livewire, DigitalOcean, Ubuntu, Nginx, Apache, MariDB, Redis, Joomla, WordPress, LDAP, RabbitMQ. {{ __('Ezen túl bármibe szívesen beleásom magam néhány nap vagy hét alatt.') }}</p>
                            </div>
                            <div class="flow-root self-center mt-8 lg:mt-0">
                                <div class="-mt-4 -ml-8 flex flex-wrap justify-around lg:-ml-4">
                                    <div class="mt-4 ml-8 flex flex-grow flex-shrink-0 lg:justify-center lg:flex-grow-0 lg:ml-4">
                                        <img class="h-12" src="{{ asset('images/laravel-logo.svg') }}" alt="Laravel">
                                    </div>
                                    <div class="mt-4 ml-8 flex flex-grow flex-shrink-0 lg:justify-center items-center lg:flex-grow-0 lg:ml-4">
                                        <img class="h-8" src="{{ asset('images/tailwind-css-logo.svg') }}" alt="Tailwindcss">
                                    </div>
                                    <div class="mt-4 ml-8 flex flex-grow flex-shrink-0 lg:justify-center items-center lg:flex-grow-0 lg:ml-4">
                                        <img class="h-12" src="{{ asset('images/livewire-logo.svg') }}" alt="Laravel Livewire">
                                    </div>
                                    <div class="mt-4 ml-8 flex flex-grow flex-shrink-0 lg:justify-center items-center lg:flex-grow-0 lg:ml-4">
                                        <img class="h-12" src="{{ asset('images/alpinejs-logo.svg') }}" alt="Alpine.js">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- CTA Section -->
                <div class="relative bg-gradient-to-br from-black to-retropurple-dark">
                    <div class="relative h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
                        <x-picture class="w-full h-full object-cover" src="{{ asset('images/contact.jpg') }}" alt="67developer programozás" width="1200" height="480" />
                        <div aria-hidden="true" class="absolute inset-0"></div>
                    </div>
                    <div class="relative mx-auto max-w-md px-4 py-12 sm:max-w-7xl sm:px-6 sm:py-20 md:py-28 lg:px-8 lg:py-32">
                        <div class="md:ml-auto md:w-1/2 md:pl-10">
                            <h2 id="kapcsolat" class="text-base font-semibold uppercase tracking-wider text-white">
                                {{ __('Kapcsolat') }}
                            </h2>
                            <p class="inline-flex mt-2 bg-clip-text text-transparent bg-gradient-to-r from-retroyellow to-retroyellow-dark text-3xl font-extrabold tracking-tight sm:text-4xl">
                                {{ __('Ha van egy érdekes problémád') }}
                            </p>
                            <p class="mt-3 text-lg text-gray-300">
                                {{ __('A munkám egyben a hobbim és szenvedélyem, de a fiam születése óta nálam már a család az első. Elsősorban azokat a munkákat vállalom el, melyek kellőképpen érdekesek, motiválóak és valamilyen szinten a világ is jobb hely lesz tőlük.') }}
                            </p>
                            <div class="mt-8">
                                <div class="inline-flex rounded-md shadow">
                                    <a href="mailto:rgergo67@gmail.com" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-gradient-to-br from-retroyellow to-retroyellow-dark hover:bg-gray-50">
                                        rgergo67@gmail.com
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <x-footer />
        </div>
    </div>
</x-frontend-layout>
