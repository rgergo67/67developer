<x-tools-layout>
    {{ __('Gergő vagyok') }}2
{{ app()->getLocale() }}
    <a href="{{ route('tools.text-compare2-' . app()->getLocale()) }}">{{ __('Online szöveg összehasonlító') }}</a>
</x-tools-layout>
