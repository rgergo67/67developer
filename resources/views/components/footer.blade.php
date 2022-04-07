<footer class="bg-white">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">
            <a href="{{ route('posts.index') }}" class="text-gray-400 hover:text-gray-500">
                {{ __('Blog') }}
            </a>
            <a href="{{ route('tools.index') }}" class="text-gray-400 hover:text-gray-500">
                {{ __('Online eszközök') }}
            </a>
            <a href="{{ route('credits') }}" class="text-gray-400 hover:text-gray-500">
                {{ __('Credits') }}
            </a>
        </div>
        <div class="mt-8 md:mt-0 md:order-1">
            <p class="text-center text-base text-gray-400">
                &copy; {{ date('Y') }} Ratting Gergely, {{ __('Minden jog fenntartva') }}
            </p>
        </div>
    </div>
</footer>
