<x-tools-layout>
    <div class="bg-white">
        <div class="relative overflow-hidden">
                <div class="bg-gradient-to-r from-black via-retropurple-dark to-retropurple-light bg-gradient-to-br pb-6">
                    <x-header />
                </div>
        </div>
    </div>
    <main>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative bg-white py-16 sm:py-24 lg:py-32">
            <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{ __('Hasznos online eszközök') }}</p>
                <div class="mt-12 prose prose-lg">
                    <ul>
                        <li><a href="{{ route('tools.text-compare') }}">{{ __('Ingyenes online szöveg összehasonlító') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </main>

    @push('header-css')
        <link href="{{ asset('css/text-compare.css') }}" rel="stylesheet">
    @endpush
</x-tools-layout>

