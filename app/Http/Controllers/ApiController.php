<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Event;
use App\Models\EventCarousel;
use App\Models\EventImage;
use App\Models\Inbox;
use App\Models\News;
use App\Models\NewsCarousel;
use App\Models\NextEvent;
use App\Models\Partner;
use App\Models\Team;
use App\Models\Testimoni;
use App\Models\Youtube;

class ApiController extends Controller
{
    public function career()
    {
        $data = Career::all();
        return response()->json($data);
    }
    public function event()
    {
        $data = Event::all();
        return response()->json($data);
    }
    public function event_carousel()
    {
        $data = EventCarousel::all();
        return response()->json($data);
    }
    public function event_image()
    {
        $data = EventImage::all();
        return response()->json($data);
    }
    public function inbox()
    {
        $data = Inbox::all();
        return response()->json($data);
    }
    public function news()
    {
        $data = News::all();
        return response()->json($data);
    }
    public function news_carousel()
    {
        $data = NewsCarousel::all();
        return response()->json($data);
    }
    public function next_event()
    {
        $data = NextEvent::all();
        return $data;
        return response()->json($data);
    }

    public function partner()
    {
        $data = Partner::select('id', 'logo')->get();
        return response()->json($data);
    }
    public function team()
    {
        $data = Team::all();
        return response()->json($data);
    }
    public function testimoni()
    {
        $data = Testimoni::all();
        return response()->json($data);
    }
    public function youtube()
    {
        $data = Youtube::all();
        return response()->json($data);
    }
}
