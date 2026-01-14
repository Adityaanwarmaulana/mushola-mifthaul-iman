@extends('layouts.app')

@section('title','Pengaturan Mushola')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 shadow rounded">

    <h2 class="text-xl font-bold mb-4">Pengaturan Mushola</h2>

    @if(session('success'))
    <div class="bg-green-100 p-3 mb-4 rounded">
        {{ session('success') }}
    </div>
    @endif

    <form method="POST" action="/admin/setting" enctype="multipart/form-data">
        @csrf

        <input name="nama_mushola" placeholder="Nama Mushola" class="input" value="{{ $setting->nama_mushola ?? '' }}">
        <textarea name="alamat" placeholder="Alamat" class="input">{{ $setting->alamat ?? '' }}</textarea>
        <input name="no_hp" placeholder="No HP" class="input" value="{{ $setting->no_hp ?? '' }}">
        <input name="email" placeholder="Email" class="input" value="{{ $setting->email ?? '' }}">

        <hr class="my-4">

        <input name="nama_bank" placeholder="Nama Bank" class="input" value="{{ $setting->nama_bank ?? '' }}">
        <input name="no_rekening" placeholder="No Rekening" class="input" value="{{ $setting->no_rekening ?? '' }}">
        <input name="atas_nama" placeholder="Atas Nama" class="input" value="{{ $setting->atas_nama ?? '' }}">

        <label class="block mt-3">QRIS</label>
        <input type="file" name="qris">

        <hr class="my-4">

        <textarea name="google_maps" placeholder="Embed Google Maps" class="input h-24">{{ $setting->google_maps ?? '' }}</textarea>

        <button class="bg-green-600 text-white px-4 py-2 mt-4 rounded">
            Simpan
        </button>

    </form>
</div>
@endsection