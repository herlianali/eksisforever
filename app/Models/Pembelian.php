<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table    = 'pembelian';

    protected $fillable = [
        'nama_produk',
        'harga_satuan',
        'jumlah',
        'total',
        'nama_pembeli',
        'alamat_pembeli',
        'nomor_telp',
    ];
}
