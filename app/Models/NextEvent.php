<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NextEvent extends Model
{
    use HasFactory;
    protected $table = "next_event";
    protected $fillable = [
        'name',
        'tanggal',
        'lokasi',
        'link',
        'urutan',
        'image',
    ];
}
