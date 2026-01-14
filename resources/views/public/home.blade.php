@extends('layouts.app')
@section('title','Beranda')

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section class="bg-green-700 text-white py-20 text-center px-4">
    <h1 class="text-4xl md:text-5xl font-bold mb-3">
        Mushola Miftahul Iman
    </h1>

    <p class="text-lg md:text-xl opacity-90">
        Pusat Ibadah dan Dakwah Umat
    </p>

    <a href="/donasi"
        class="inline-block mt-8 bg-white text-green-700 font-semibold px-8 py-3 rounded-lg shadow hover:bg-gray-100 transition">
        Donasi Sekarang
    </a>
</section>


{{-- ================= JADWAL SHOLAT ================= --}}
<section class="max-w-6xl mx-auto mt-20 px-4">

    <h2 class="text-2xl font-bold text-center mb-2">
        Jadwal Sholat Hari Ini
    </h2>

    <p class="text-center text-gray-500 mb-8">
        {{ now()->translatedFormat('l, d F Y') }}
    </p>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">

        <div class="bg-white p-4 rounded-xl shadow text-center">
            <p class="font-semibold text-gray-700">Subuh</p>
            <p class="text-lg font-bold text-green-700">
                {{ $jadwal['Fajr'] ?? '-' }}
            </p>
        </div>

        <div class="bg-white p-4 rounded-xl shadow text-center">
            <p class="font-semibold text-gray-700">Dzuhur</p>
            <p class="text-lg font-bold text-green-700">
                {{ $jadwal['Dhuhr'] ?? '-' }}
            </p>
        </div>

        <div class="bg-white p-4 rounded-xl shadow text-center">
            <p class="font-semibold text-gray-700">Ashar</p>
            <p class="text-lg font-bold text-green-700">
                {{ $jadwal['Asr'] ?? '-' }}
            </p>
        </div>

        <div class="bg-white p-4 rounded-xl shadow text-center">
            <p class="font-semibold text-gray-700">Maghrib</p>
            <p class="text-lg font-bold text-green-700">
                {{ $jadwal['Maghrib'] ?? '-' }}
            </p>
        </div>

        <div class="bg-white p-4 rounded-xl shadow text-center">
            <p class="font-semibold text-gray-700">Isya</p>
            <p class="text-lg font-bold text-green-700">
                {{ $jadwal['Isha'] ?? '-' }}
            </p>
        </div>

    </div>
</section>


{{-- ================= KEGIATAN ================= --}}
<section class="bg-gray-50 py-20 mt-20">
    <div class="max-w-6xl mx-auto px-4">

        <h2 class="text-2xl font-bold text-center mb-10">
            Kegiatan Mushola
        </h2>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-semibold mb-2">Kajian Rutin</h3>
                <p class="text-sm text-gray-600">
                    Setiap Jumat malam ba’da Isya.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-semibold mb-2">Kerja Bakti</h3>
                <p class="text-sm text-gray-600">
                    Ahad pagi pukul 07.00 WIB.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-semibold mb-2">Infaq Renovasi</h3>
                <p class="text-sm text-gray-600">
                    Program pembangunan fasilitas.
                </p>
            </div>

        </div>
    </div>
</section>


{{-- ================= CTA DONASI ================= --}}
<section class="bg-green-700 text-white py-16 text-center">
    <h2 class="text-3xl font-bold mb-4">
        Mari Memakmurkan Mushola
    </h2>

    <p class="text-green-100 mb-6">
        Infaq dan sedekah Anda sangat berarti.
    </p>

    <a href="/donasi"
        class="inline-block bg-white text-green-700 px-8 py-3 rounded-lg font-semibold hover:bg-green-100 transition">
        Donasi Sekarang
    </a>
</section>

@endsection