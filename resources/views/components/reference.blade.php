<li class="shadow-lg shadow-retropurple py-10 px-6 bg-retrodark text-center rounded-lg xl:px-10 xl:text-left border border-retroyellow border-2 flex flex-col justify-between space-y-4 relative">
    <div class=" space-y-4">
        <x-picture picture-class="aspect-w-3 aspect-h-2 block" class="drop-shadow-lg object-cover rounded-lg" src="{{ $image }}" alt="{{ $title }}" width="300" height="200" />
        <div class="shadow-md shadow-retropurple-dark text-retrodark text-center bg-gradient-to-r from-retroyellow to-retroyellow-dark text-lg leading-8 font-medium space-y-1">
            <h3>{{ $title }}</h3>
        </div>
        <div class="text-lg">
            <div class="text-white">
                {{ $slot }}
            </div>
        </div>

        @isset($badges)
        <div class="flex flex-wrap gap-3">
            {{ $badges }}
        </div>
        @endisset
    </div>
    <div class="flex justify-between items-center">
        @isset($link)
            <a href="{{ $link }}" target="_blank">
                <span aria-hidden="true" class="absolute inset-0"></span>
            </a>
        @endisset
    </div>
</li>
