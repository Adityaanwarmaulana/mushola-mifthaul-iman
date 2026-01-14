<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\Response;

class HomeController extends Controller
{
    public function index()
    {
        // DEFAULT FALLBACK (ANTI ERROR)
        $jadwal = [
            'Fajr'    => '-',
            'Dhuhr'   => '-',
            'Asr'     => '-',
            'Maghrib' => '-',
            'Isha'    => '-',
        ];

        try {
            /** @var Response $response */
            $response = Http::timeout(5)->get(
                'https://api.aladhan.com/v1/timingsByCity',
                [
                    'city' => 'Jakarta',
                    'country' => 'Indonesia',
                ]
            );

            // ✔ CEK STATUS PALING BENAR
            if ($response->successful()) {
                $jadwal = $response->json('data.timings');
            } else {
                Log::warning('API Jadwal Sholat gagal', [
                    'http_status' => $response->status(),
                ]);
            }
        } catch (\Throwable $e) {
            Log::error('Gagal konek API Jadwal Sholat', [
                'error' => $e->getMessage(),
            ]);
        }

        return view('public.home', compact('jadwal'));
    }
}
