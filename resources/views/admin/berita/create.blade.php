@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 shadow">
    <form method="POST" enctype="multipart/form-data" action="/admin/berita">
        @csrf

        <label>Judul</label>
        <input type="text" name="judul" class="w-full border p-2 mb-4">

        <label>Konten</label>
        <textarea name="konten" class="w-full border p-2 mb-4"></textarea>

        <label>Gambar</label>
        <input type="file" name="gambar">

        <button class="mt-4 bg-green-600 text-white px-4 py-2 rounded">
            Simpan
        </button>

    </form>
</div>
@endsection