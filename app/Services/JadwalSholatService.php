<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class JadwalSholatService
{
    public function getHariIni($city = 'Jakarta')
    {
        $response = Http::get('https://api.aladhan.com/v1/timingsByCity', [
            'city'    => $city,
            'country' => 'Indonesia',
            'method'  => 11
        ]);

        return [
            'jadwal'  => $response['data']['timings'],
            'tanggal' => $response['data']['date']['readable'],
        ];
    }
}
