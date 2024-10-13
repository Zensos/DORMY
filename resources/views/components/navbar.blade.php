@php
    use Illuminate\Support\Facades\Request;
@endphp

<nav x-data="{
    isHome: {{ Request::path() === '/' ? 'true' : 'false' }},
    isFavorite: {{ Request::path() === 'favorite' ? 'true' : 'false' }},
    isContact: {{ Request::path() === 'contact' ? 'true' : 'false' }},
    isOpen: false
}"
    class="fixed top-0 left-0 w-full bg-transparent px-6 lg:px-12 h-20 z-[15] flex justify-between items-center"
    :class="isOpen ? 'bg-white/30 backdrop-blur-md' : 'bg-transparent'">
    <a href="/" class="w-44 lg:w-48">
        <img src="/logo.png" alt="logo" class="w-full h-auto">
    </a>

    <div class="hidden lg:flex gap-12 text-lg">
        <a :class="isHome ? 'text-black font-semibold' : 'text-black/40 hover:text-black/70'" href="/">HOME</a>
        <a :class="isFavorite ? 'text-black font-semibold' : 'text-black/40 hover:text-black/70'"
            href="/favorite">FAVORITE</a>
        <a :class="isContact ? 'text-black font-semibold' : 'text-black/40 hover:text-black/70'"
            href="/contact">CONTACT</a>
    </div>

    <div class="flex items-center gap-4 border-2 border-coal/40 bg-white/20 backdrop-blur-md rounded-full">
        <div class="flex items-center gap-1">
            @unless (Auth::check())
                <div>
                    <img class="w-10 h-10 object-cover"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/768px-Google_%22G%22_logo.svg.png"
                        alt="google">
                </div>
                @endif
                @if (Auth::check())
                    <p class="text-[#EC6624] px-3 py-1 text-lg font-medium hidden sm:block">
                        {{ Auth::user()->name }}
                    </p>
                @else
                    <a href="{{ url('/auth/google') }}"
                        class="text-coal px-3 py-1 rounded-md text-lg font-medium hidden sm:block">
                        Google
                    </a>
                @endif

                @if (Auth::check())
                    <div class="w-12 h-12 rounded-full bg-white overflow-hidden">
                        <img class="object-cover w-full h-full" src="/avatar.png" alt="avatar">
                    </div>
                @endif
            </div>

            <button @click="isOpen = !isOpen" class="lg:hidden text-coal/80 focus:outline-none px-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div x-show="isOpen" x-cloak @click.outside="isOpen = false"
            x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="-translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="-translate-y-full opacity-0"
            class="lg:hidden absolute top-0 left-0 w-full bg-white h-screen shadow-md py-5 flex flex-col items-center justify-center gap-4 text-lg">
            <div>
                <img class="object-cover w-52 h-32" src="/logo.png" alt="logo">
            </div>
            <a :class="isHome ? 'text-black font-semibold' : 'text-gray-700 hover:text-black'" href="/">HOME</a>
            <a :class="isFavorite ? 'text-black font-semibold' : 'text-gray-700 hover:text-black'"
                href="/favorite">FAVORITE</a>
            <a :class="isContact ? 'text-black font-semibold' : 'text-gray-700 hover:text-black'"
                href="/contact">CONTACT</a>
            <a class="text-red-500" @click="isOpen = false">CLOSE</a>
        </div>
    </nav>
