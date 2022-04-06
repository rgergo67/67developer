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
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="pb-5 border-b border-gray-200">
                <h3 class="text-lg leading-6 font-medium text-gray-900">{{ __('Ingyenes online szöveg összehasonlító') }}</h3>
                <p class="mt-2 max-w-4xl text-sm text-gray-500">Workcation is a property rental website. Etiam ullamcorper massa viverra consequat, consectetur id nulla tempus. Fringilla egestas justo massa purus sagittis malesuada.</p>
            </div>
        </div>

        <form action="{{ route('tools.text-compare') }}#result" method="post">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 px-4">
                <div>
                    <label for="text1" class="block text-sm font-medium text-gray-700">{{ __('Ezt a szöveget hasonlítom össze') }}</label>
                    <div class="mt-1">
                        <textarea rows="4" name="text1" id="text1" class="shadow-sm focus:ring-retrodark focus:border-retrodark block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>
                </div>
                <div>
                    <label for="text2" class="block text-sm font-medium text-gray-700">{{ __('Ezzel a szöveggel') }}</label>
                    <div class="mt-1">
                        <textarea rows="4" name="text2" id="text2" class="shadow-sm focus:ring-retrodark focus:border-retrodark block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-4">
                <button type="submit" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium shadow rounded-md text-gray-900 bg-gradient-to-br from-retroyellow to-retroyellow-dark hover:bg-gray-50">
                    {{ __('Összehasnolítás') }}
                </button>
            </div>
        </form>

        @if(isset($result))
            <div id="result" class="px-4 pt-8">
                {!! $result !!}
            </div>
        @endisset

        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="pb-5 mb-5 border-b border-gray-200">
                <h3 class="text-lg leading-6 font-medium text-gray-900">{{ __('További eszközök') }}</h3>
                <p class="mt-2 max-w-4xl text-sm text-gray-500">
                    {{ __('Próbáld ki további ingyenes online eszközeinket!') }}
                </p>
            </div>
            <a href="{{ route('tools.text-compare-' . app()->getLocale()) }}"></a>
        </div>
    </main>

    @push('header-css')
        <link href="{{ asset('css/text-compare.css') }}" rel="stylesheet">
    @endpush
</x-tools-layout>

