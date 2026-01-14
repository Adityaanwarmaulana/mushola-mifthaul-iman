@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
<div class="max-w-3xl mx-auto py-16 px-4">

    <h1 class="text-3xl font-bold mb-2">
        {{ $berita->judul }}
    </h1>

    <p class="text-sm text-gray-500 mb-6">
        {{ $berita->created_at->translatedFormat('d F Y') }}
    </p>

    <div class="text-gray-700 leading-relaxed">
        {!! nl2br(e($berita->isi)) !!}
    </div>

    <a href="{{ route('berita.index') }}"
        class="inline-block mt-8 text-green-700 font-semibold">
        ← Kembali ke Berita
    </a>

</div>
@endsection