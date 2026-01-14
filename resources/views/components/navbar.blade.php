<nav x-data="{ open: false }" class="bg-green-700 text-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

        {{-- LOGO / NAMA --}}
        <a href="/" class="font-bold text-lg tracking-wide">
            Mushola Miftahul Iman
        </a>

        {{-- MENU DESKTOP --}}
        <div class="hidden md:flex space-x-6 items-center">
            <a href="/" class="hover:text-green-200">Home</a>
            <a href="/berita" class="hover:text-green-200">Berita</a>
            <a href="/galeri" class="hover:text-green-200">Galeri</a>
            <a href="/donasi" class="hover:text-green-200">Donasi</a>
            <a href="/kontak" class="hover:text-green-200">Kontak</a>
            @auth
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit"
                    class="text-sm text-red-600 hover:underline">
                    Logout
                </button>
            </form>
            @endauth

        </div>

        {{-- HAMBURGER (MOBILE) --}}
        <button
            @click="open = !open"
            class="md:hidden text-2xl focus:outline-none"
            aria-label="Menu">
            ☰
        </button>
    </div>

    {{-- MENU MOBILE --}}
    <div
        x-show="open"
        x-transition
        @click.outside="open = false"
        class="md:hidden bg-green-800">
        <a href="/" class="block px-4 py-3 hover:bg-green-600">Home</a>
        <a href="/berita" class="block px-4 py-3 hover:bg-green-600">Berita</a>
        <a href="/galeri" class="block px-4 py-3 hover:bg-green-600">Galeri</a>
        <a href="/donasi" class="block px-4 py-3 hover:bg-green-600">Donasi</a>
        <a href="/kontak" class="block px-4 py-3 hover:bg-green-600">Kontak</a>
        @auth
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit"
                class="text-sm text-red-600 hover:underline">
                Logout
            </button>
        </form>
        @endauth

    </div>
</nav>