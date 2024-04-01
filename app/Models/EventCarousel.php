<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCarousel extends Model
{
    use HasFactory;
    protected $table = 'event_carousel';
    protected $fillable = [
        'title',
        'subtitle',
        'foto',
        'urutan',
    ];
}
