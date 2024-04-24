<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Event;
use App\Models\EventCarousel;
use App\Models\inbox;
use App\Models\News;
use App\Models\Partner;
use App\Models\Team;
use App\Models\Testimoni;
use App\Models\Youtube;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
        $youtubes = Youtube::all();
        $testimonials = Testimoni::all();
        $event_carousels = EventCarousel::all();
        return view("backend.dashboard", [
            "youtubes" => $youtubes,
            "testimonials" => $testimonials,
            "event_carousels" => $event_carousels,
        ]);
    }

    public function partner()
    {
        $partners = Partner::all();
        return view("backend.partner", ['partners' => $partners]);
    }

    public function event()
    {
        $events = Event::all();
        return view("backend.event", ['events' => $events]);
    }
    public function news()
    {
        $newses = News::all();
        return view("backend.news", ['newses' => $newses]);
    }
    public function career()
    {
        $careers = Career::all();
        return view("backend.career", ['careers' => $careers]);
    }
    public function team()
    {
        $teams = Team::orderBy('urutan', 'asc')->get();
        return view("backend.team", ['teams' => $teams]);
    }
    public function inbox()
    {
        $inboxs = Inbox::orderby('id', 'desc')->get();
        return view("backend.inbox", ['inboxs' => $inboxs]);
    }

    // Update View
    public function update_partner($id)
    {
        $data = Partner::find($id);
        return view("backend.update_partner", ['data' => $data]);
    }

    public function update_partner_urutan()
    {
        $data = Partner::all();
        return view("backend.update_partner_urutan", ['data' => $data]);
    }

    public function update_event($id)
    {
        $data = Event::find($id);
        return view("backend.update_event", ['data' => $data]);
    }
    public function update_news($id)
    {
        $data = News::find($id);
        return view("backend.update_news", ['data' => $data]);
    }
    public function update_career($id)
    {
        $data = Career::find($id);
        return view("backend.update_career", ['data' => $data]);
    }
    public function update_team($id)
    {
        $data = Team::find($id);
        return view("backend.update_team", ['data' => $data]);
    }
}
