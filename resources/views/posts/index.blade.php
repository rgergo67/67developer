<x-tools-layout>
    <div class="bg-white">
        <div class="relative overflow-hidden">
            <div class="bg-linear-to-r from-black via-retropurple-dark to-retropurple-light bg-linear-to-br pb-6">
                <x-header />
            </div>
        </div>
    </div>
    <div class="bg-white pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">{{ __('Egy egyetemi webmester fejlődése') }}</h2>
                <div class="mt-3 sm:mt-4 lg:grid lg:grid-cols-2 lg:gap-5 lg:items-center">
                </div>
            </div>
            <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
                @foreach($posts as $post)
                <div>
                    <p class="text-sm text-gray-500">
                        <time datetime="{{ $post->created_at->format('Y-m-d') }}">{{ $post->created_at->format('Y-m-d') }}</time>
                    </p>
                    <a href="{{ route('posts.show', ['post' => $post, 'slug' => $post->slug]) }}" class="mt-2 block">
                        <p class="text-xl font-semibold text-gray-900">{{ $post->title }}</p>
                        <div class="mt-3 text-base text-gray-500 prose">
                            {!! $post->excerpt !!}
                        </div>
                    </a>
                    <div class="mt-3">
                        <a href="{{ route('posts.show', ['post' => $post, 'slug' => $post->slug]) }}" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> {{ __('Elolvasom') }} </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="max-w-lg mx-auto lg:max-w-7xl mt-8">
            {{ $posts->links() }}
        </div>
    </div>

</x-tools-layout>
