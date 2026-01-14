@extends('layouts.app')

@section('title','Donasi Mushola Miftahul Iman')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-4 text-center">Donasi Mushola Miftahul Iman</h2>

    <p class="text-center mb-6">
        Mari dukung kegiatan dan operasional mushola melalui donasi terbaik Anda.
    </p>

    <div class="text-center space-y-2">
        <p><strong>Bank:</strong> BSI</p>
        <p><strong>No Rekening:</strong> 123456789</p>
        <p><strong>Atas Nama:</strong> Mushola Miftahul Iman</p>
    </div>

    <div class="flex justify-center mt-6">
        <img src="{{ asset('images/qris.png') }}" class="w-48" alt="QRIS Donasi">
    </div>
</div>
@endsection