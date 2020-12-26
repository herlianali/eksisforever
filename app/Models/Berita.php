<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table    = 'berita';
    protected $fillable = [
        'jenis_berita',
        'judul_berita',
        'isi_berita',
        'tanggal_posting',
        'gambar',
        'author',
        'status'
    ];
}
