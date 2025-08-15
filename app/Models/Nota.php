<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'nota'; 
    public $timestamps = true; 

    protected $fillable = [
        'id',
        'no_nota',
        'tanggal',
        'pembeli',
        'alamat',
        'subtotal',
        'diskon_persen',
        'diskon_rupiah',
        'total_harga',
        'total_coly',
        'jt_tempo',
        'status',
        'cek',
        'print',
    ];
}
