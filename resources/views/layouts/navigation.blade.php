<nav x-data="{ open: false }" class="bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            {{-- LEFT --}}
            <div class="flex items-center">
                {{-- LOGO --}}
                <a href="/" class="flex items-center gap-2">
                    <span class="font-semibold text-gray-800 hidden sm:block">
                        Mushola Miftahul Iman
                    </span>
                </a>

                {{-- DESKTOP MENU --}}
                <div class="hidden sm:flex space-x-8 sm:ms-10">
                    <a href="/" class="nav-link">Home</a>
                    <a href="/berita" class="nav-link">Berita</a>
                    <a href="/galeri" class="nav-link">Galeri</a>
                    <a href="/donasi" class="nav-link">Donasi</a>
                    <a href="/kontak" class="nav-link">Kontak</a>

                    @auth
                    <a href="{{ route('dashboard') }}"
                        class="text-green-700 font-semibold hover:underline">
                        Dashboard
                    </a>
                    @endauth
                </div>
            </div>

            {{-- RIGHT --}}
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-600 hover:text-gray-800">
                            {{ Auth::user()->name }}
                            <svg class="ms-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293L10 11.586l4.707-4.293"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            Profile
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link
                                :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                @else
                <a href="{{ route('login') }}"
                    class="text-gray-600 hover:text-green-700 font-medium">
                    Login Admin
                </a>
                @endauth
            </div>

            {{-- HAMBURGER --}}
            <div class="flex items-center sm:hidden">
                <button @click="open = !open"
                    class="p-2 rounded-md text-gray-500 hover:bg-gray-100">
                    ☰
                </button>
            </div>
        </div>
    </div>

    {{-- MOBILE MENU --}}
    <div x-show="open" x-transition class="sm:hidden bg-white border-t">
        <div class="px-4 py-3 space-y-2 text-sm">
            <a href="/" class="mobile-link">Home</a>
            <a href="/berita" class="mobile-link">Berita</a>
            <a href="/galeri" class="mobile-link">Galeri</a>
            <a href="/donasi" class="mobile-link">Donasi</a>
            <a href="/kontak" class="mobile-link">Kontak</a>

            @auth
            <hr class="my-2">
            <div class="text-gray-600 font-medium">
                {{ Auth::user()->name }}
            </div>
            <a href="{{ route('dashboard') }}" class="mobile-link text-green-700">
                Dashboard
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-red-600 w-full text-left">
                    Logout
                </button>
            </form>
            @else
            <a href="{{ route('login') }}" class="mobile-link text-green-700">
                Login Admin
            </a>
            @endauth
        </div>
    </div>
</nav>