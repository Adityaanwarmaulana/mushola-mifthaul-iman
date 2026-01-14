@extends('layouts.app')

@section('title','Tambah Galeri')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 shadow rounded">

    <h2 class="text-xl font-bold mb-4">Tambah Foto Galeri</h2>

    <form action="/admin/galeri" method="POST" enctype="multipart/form-data">
        @csrf

        <label class="block mb-2">Judul (opsional)</label>
        <input type="text" name="judul" class="w-full border p-2 mb-4">

        <label class="block mb-2">Foto</label>
        <input type="file" name="foto" class="mb-4">

        @error('foto')
        <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
        @enderror

        <button class="bg-green-600 text-white px-4 py-2 rounded">
            Simpan
        </button>

    </form>
</div>
@endsection