@extends('layouts.app')

@section('title','Galeri')

@section('content')
<div class="max-w-6xl mx-auto">

    <h1 class="text-3xl font-bold mb-6 text-center">Galeri Kegiatan</h1>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @foreach($galeris as $g)
        <img src="{{ asset('storage/'.$g->foto) }}"
            class="rounded shadow object-cover w-full h-40">
        @endforeach
    </div>

</div>
@endsection