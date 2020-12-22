<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    
    protected $table    = 'agenda';
    protected $fillable = [
        'tema_agenda',
        'isi_agenda',
        'tanggal_posting',
        'author',
    ];
}
