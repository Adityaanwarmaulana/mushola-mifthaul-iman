<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.setting.index', compact('setting'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_mushola' => 'nullable',
            'alamat' => 'nullable',
            'no_hp' => 'nullable',
            'email' => 'nullable',
            'nama_bank' => 'nullable',
            'no_rekening' => 'nullable',
            'atas_nama' => 'nullable',
            'google_maps' => 'nullable',
            'qris' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('qris')) {
            $data['qris'] = $request->file('qris')->store('qris', 'public');
        }

        Setting::updateOrCreate(['id' => 1], $data);

        return back()->with('success', 'Data berhasil disimpan');
    }
}
