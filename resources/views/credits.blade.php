<x-frontend-layout>
    <div class="bg-white">
        <div class="relative overflow-hidden">
            <main>
                <div class="bg-gradient-to-r from-black via-retropurple-dark to-retropurple-light bg-gradient-to-br pb-6">
                    <x-header />
                </div>
            </main>
        </div>
    </div>
    <div class="relative py-16 bg-white overflow-hidden">
        <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
            <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
                <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                    <defs>
                        <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
                </svg>
                <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                    <defs>
                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
                </svg>
            </div>
        </div>
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto">
                <h1>
                    <span class="block text-base text-center text-indigo-600 font-semibold tracking-wide uppercase">{{ __('Kredit') }}</span>
                    <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{ __('Felhasznált tartalmak') }}</span>
                </h1>
                <p class="mt-8 text-xl text-gray-500 leading-8">{{ __('Az oldal elkészítéséhez az alább felsorolt tartalmakat és nyílt forráskódú rendszereket használtam fel.') }}</p>
            </div>
            <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto flex flex-col">
                <a href="https://laravel.com" target="_blank" rel="noopener">Laravel</a>
                <a href="https://tailwindcss.com" target="_blank" rel="noopener">TailwindCSS</a>
                <a href="https://tailwindui.com" target="_blank" rel="noopener">TailwindUI</a>
                <a href="https://www.freepik.com/vectors/icons" target="_blank" rel="noopener">Icons vector created by fullvector - www.freepik.com</a>
                <a href="https://pngtree.com/so/dog" target="_blank" rel="noopener">dog png from pngtree.com/</a>
                <a href="https://www.freepik.com/vectors/computer" target="_blank" rel="noopener">Computer vector created by upklyak - www.freepik.com</a>
            </div>
        </div>
    </div>

    <x-footer />
</x-frontend-layout>
