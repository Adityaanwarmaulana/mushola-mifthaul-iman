@extends('layouts.app')

@section('title','Donasi')

@section('content')
<div class="max-w-xl mx-auto text-center">

    <h1 class="text-3xl font-bold mb-4">Donasi {{ $setting->nama_mushola }}</h1>

    <p>{{ $setting->nama_bank }}</p>
    <p>{{ $setting->no_rekening }}</p>
    <p>a.n {{ $setting->atas_nama }}</p>

    @if($setting->qris)
    <img src="{{ asset('storage/'.$setting->qris) }}" class="mx-auto mt-4 w-64">
    @endif

</div>
@endsection