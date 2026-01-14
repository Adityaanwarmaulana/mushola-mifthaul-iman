<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard Admin
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Sambutan --}}
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-1">
                    Selamat datang, {{ Auth::user()->name }}
                </h3>
                <p class="text-gray-600 text-sm">
                    Anda login sebagai admin Mushola Miftahul Iman.
                </p>
            </div>

            {{-- Ringkasan --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-green-100 p-6 rounded-lg shadow">
                    <h4 class="text-sm text-gray-600">Total Berita</h4>
                    <p class="text-2xl font-bold">
                        {{ \App\Models\Berita::count() }}
                    </p>
                </div>

                <div class="bg-blue-100 p-6 rounded-lg shadow">
                    <h4 class="text-sm text-gray-600">Total Galeri</h4>
                    <p class="text-2xl font-bold">
                        {{ \App\Models\Galeri::count() }}
                    </p>
                </div>

                <div class="bg-yellow-100 p-6 rounded-lg shadow">
                    <h4 class="text-sm text-gray-600">Total Donasi</h4>
                    <p class="text-2xl font-bold">
                        {{ \App\Models\Donasi::count() ?? 0 }}
                    </p>
                </div>

            </div>

            {{-- Akses Cepat --}}
            <div class="bg-white p-6 rounded-lg shadow">
                <h4 class="font-semibold mb-4">Menu Cepat</h4>
                <div class="flex flex-wrap gap-4">

                    <a href="/admin/berita"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Kelola Berita
                    </a>

                    <a href="/admin/galeri"
                        class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                        Kelola Galeri
                    </a>

                    <a href="/admin/donasi"
                        class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">
                        Data Donasi
                    </a>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>