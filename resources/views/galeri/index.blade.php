@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto px-4">

    <h1 class="text-3xl font-bold mb-6 text-center">
        Galeri Kegiatan Mushola Miftahul Iman
    </h1>

    <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-4">

        @foreach($galeris as $g)
        <div class="overflow-hidden rounded shadow">
            <img
                src="{{ asset('storage/' . $g->foto) }}"
                alt="{{ $g->judul }}"
                class="w-full h-48 object-cover">
        </div>
        @endforeach

    </div>

</div>

@endsection