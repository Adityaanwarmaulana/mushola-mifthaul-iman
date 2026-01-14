@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4">

    <h1 class="text-2xl font-bold mb-6">
        Dashboard Admin
    </h1>

    {{-- Info Login --}}
    <div class="bg-white p-4 rounded shadow mb-6">
        <p class="text-gray-700">
            Login sebagai:
            <span class="font-semibold">
                {{ auth()->user()->name }}
            </span>
        </p>
    </div>

    {{-- Statistik Sederhana --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="bg-green-600 text-white p-6 rounded shadow">
            <h2 class="text-lg font-semibold">Total Berita</h2>
            <p class="text-3xl font-bold mt-2">
                {{ \App\Models\Berita::count() }}
            </p>
        </div>

        <div class="bg-blue-600 text-white p-6 rounded shadow">
            <h2 class="text-lg font-semibold">Total Galeri</h2>
            <p class="text-3xl font-bold mt-2">
                {{ \App\Models\Galeri::count() ?? 0 }}
            </p>
        </div>

        <div class="bg-gray-700 text-white p-6 rounded shadow">
            <h2 class="text-lg font-semibold">Status Website</h2>
            <p class="text-xl font-semibold mt-2">
                AKTIF
            </p>
        </div>

    </div>

    {{-- Menu Admin --}}
    <div class="mt-10 bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">Menu Admin</h2>

        <div class="flex flex-wrap gap-4">
            <a href="/admin/berita"
                class="bg-green-600 text-white px-5 py-3 rounded hover:bg-green-700">
                Kelola Berita
            </a>

            <a href="/admin/galeri"
                class="bg-blue-600 text-white px-5 py-3 rounded hover:bg-blue-700">
                Kelola Galeri
            </a>

            <a href="/"
                class="bg-gray-600 text-white px-5 py-3 rounded hover:bg-gray-700">
                Lihat Website
            </a>

        </div>
    </div>

</div>
@endsection