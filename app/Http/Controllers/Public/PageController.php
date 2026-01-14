<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class PageController extends Controller
{
    public function donasi()
    {
        return view('public.donasi', ['setting' => Setting::first()]);
    }

    public function kontak()
    {
        return view('public.kontak', ['setting' => Setting::first()]);
    }
}
