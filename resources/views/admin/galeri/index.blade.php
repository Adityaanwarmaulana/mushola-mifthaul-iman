@extends('layouts.app')

@section('title','Galeri')

@section('content')
<div class="max-w-6xl mx-auto">

    <div class="flex justify-between mb-4">
        <h1 class="text-2xl font-bold">Galeri</h1>
        <a href="/admin/galeri/create" class="bg-green-600 text-white px-4 py-2 rounded">
            Tambah Foto
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
        {{ session('success') }}
    </div>
    @endif

    <div class="grid md:grid-cols-4 gap-4">
        @foreach($galeris as $g)
        <div class="bg-white shadow rounded overflow-hidden">
            <img src="{{ asset('storage/'.$g->foto) }}" class="w-full h-40 object-cover">
            @if($g->judul)
            <div class="p-2 text-center text-sm">
                {{ $g->judul }}
            </div>
            @endif
        </div>
        @endforeach
    </div>

</div>
@endsection