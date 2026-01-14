@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-12 px-4">
    <div class="grid md:grid-cols-3 gap-6">

        @forelse($beritas as $berita)
        <div class="bg-white shadow rounded overflow-hidden">

            @if($berita->gambar)
            <img
                src="{{ asset('storage/' . $berita->gambar) }}"
                class="w-full h-48 object-cover"
                alt="{{ $berita->judul }}">
            @endif

            <div class="p-4">
                <h3 class="font-bold text-lg mb-2">
                    {{ $berita->judul }}
                </h3>

                <a
                    href="{{ route('berita.show', $berita->slug) }}"
                    class="text-green-700 font-semibold hover:underline">
                    Baca selengkapnya →
                </a>
            </div>

        </div>
        @empty
        <p class="text-gray-500 col-span-3 text-center">
            Belum ada berita.
        </p>
        @endforelse

    </div>
</div>
@endsection