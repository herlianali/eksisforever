<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statis extends Model
{
    use HasFactory;

    protected $table    = "statis";
    // public $timestamps  = false;
    protected $fillable =  [
        'nama_desa',
        'about_web',
        'contac_person',
        'email',
    ];
}
