<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'nama_mushola',
        'alamat',
        'no_hp',
        'email',
        'nama_bank',
        'no_rekening',
        'atas_nama',
        'qris',
        'google_maps'
    ];
}
