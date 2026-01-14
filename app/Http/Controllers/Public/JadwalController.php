<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class JadwalController extends Controller
{
    public function index()
    {
        // Ambil tanggal hari ini
        $tanggal = Carbon::now()->translatedFormat('l, d F Y');

        // Ambil jadwal sholat dari API
        $response = Http::get('https://api.aladhan.com/v1/timingsByCity', [
            'city' => 'Jakarta',
            'country' => 'Indonesia',
            'method' => 11,
        ]);

        $jadwal = $response->json()['data']['timings'];

        // KIRIM SEMUA VARIABEL KE VIEW
        return view('public.jadwal', compact('jadwal', 'tanggal'));
    }
}
