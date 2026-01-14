@extends('layouts.app')

@section('title', 'Jadwal Sholat')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">

    <h2 class="text-2xl font-bold mb-4 text-center">
        Jadwal Sholat – {{ $tanggal }}
    </h2>

    <table class="w-full border">
        <tr class="bg-gray-100">
            <th class="border p-2">Sholat</th>
            <th class="border p-2">Waktu</th>
        </tr>

        <tr>
            <td class="border p-2">Subuh</td>
            <td class="border p-2">{{ $jadwal['Fajr'] }}</td>
        </tr>
        <tr>
            <td class="border p-2">Dzuhur</td>
            <td class="border p-2">{{ $jadwal['Dhuhr'] }}</td>
        </tr>
        <tr>
            <td class="border p-2">Ashar</td>
            <td class="border p-2">{{ $jadwal['Asr'] }}</td>
        </tr>
        <tr>
            <td class="border p-2">Maghrib</td>
            <td class="border p-2">{{ $jadwal['Maghrib'] }}</td>
        </tr>
        <tr>
            <td class="border p-2">Isya</td>
            <td class="border p-2">{{ $jadwal['Isha'] }}</td>
        </tr>
    </table>

</div>
@endsection