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
    </div>
    <div class="flex justify-between items-center">
        @isset($link)
            <div class="bg-retroyellow text-retrodark shadow-sm shadow-retroyellow rounded-full py-1 px-2 italic font-bold text-sm">
                <a href="{{ $link }}" target="_blank">
                    Link
                    <span aria-hidden="true" class="absolute inset-0"></span>
                </a>
            </div>
            @else
            <div></div>
        @endisset
        <div class="bg-retrodark-dark rounded-full p-2 flex space-x-4">
            <button type="button" class="gameboy-button rounded-full w-10 h-10 bg-retroyellow text-retrodark flex items-center justify-center font-bold">A</button>
            <button type="button" class="gameboy-button rounded-full w-10 h-10 bg-retroyellow text-retrodark flex items-center justify-center font-bold">B</button>
        </div>
    </div>
</li>
