<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'event';

    protected $fillable = [
        'judul',
        'tgl_mulai',
        'tgl_selesai',
        'lokasi',
        'kota',
        'addition',
        'link',
        'logo',
        'eo',
        'deskripsi',
    ];
}
