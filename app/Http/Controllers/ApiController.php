<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function event()
    {
        $data = Event::all();
        return $data;
    }
    public function event_detail($id)
    {
        $data = Event::find($id);
        return $data;
    }
}
