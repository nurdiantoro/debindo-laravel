<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Event;
use App\Models\EventCarousel;
use App\Models\News;
use App\Models\NewsCarousel;
use App\Models\Partner;
use App\Models\Team;
use App\Models\Testimoni;
use App\Models\Youtube;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $highlights = News::limit(4)->get();
        $testimoni = Testimoni::all();
        $youtubes = Youtube::all();
        $partners = Partner::orderBy('urutan', 'asc')->get();
        $title = "Debindo | All Event Spesialists";
        return view('frontend.home', [
            'highlights' => $highlights,
            'testimoni' => $testimoni,
            'youtubes' => $youtubes,
            'title' => $title,
            'partners' => $partners
        ]);
    }

    public function event()
    {
        $eventCarousel = EventCarousel::all();
        $eventDebindo = Event::where('eo', 'Debindomulti Adhiswasti')->orderBy('tgl_mulai', 'desc')->get();
        $events = Event::all();
        $title = "Debindo | Events";
        return view('frontend.event', [
            'title' => $title,
            'eventCarousel' => $eventCarousel,
            'eventDebindo' => $eventDebindo,
            'events' => $events,
        ]);
    }
    public function news()
    {
        $newsCarousel = NewsCarousel::all();
        $newss = News::orderBy('tgl_post', 'desc')->get();
        $title = "Debindo | News";
        return view('frontend.news', [
            'title' => $title,
            'newsCarousel' => $newsCarousel,
            'newss' => $newss,
        ]);
    }
    public function news_detail($slug)
    {
        $news = News::find($slug);
        $title = $news->title;
        return view('frontend.news_detail', [
            'title' => $title,
            'news' => $news,
        ]);
    }
    public function career()
    {
        $careers = Career::all();
        $title = "Debindo | Career";
        return view('frontend.career', [
            'title' => $title,
            'careers' => $careers,
        ]);
    }
    public function team()
    {
        $ourDireksi = Team::where('tingkat_jabatan', 'Direksi')->get();
        $ourManager = Team::where('tingkat_jabatan', 'manager')->get();
        $ourStaff = Team::where('tingkat_jabatan', 'staff')->get();
        $title = "Debindo | Our Team";
        return view('frontend.team', [
            'title' => $title,
            'ourDireksi' => $ourDireksi,
            'ourManager' => $ourManager,
            'ourStaff' => $ourStaff,
        ]);
    }
    public function about()
    {
        $title = "Debindo | About Us";
        return view('frontend.about', [
            'title' => $title
        ]);
    }
    public function contact()
    {
        $title = "Debindo | Contact Us";
        return view('frontend.contact', [
            'title' => $title
        ]);
    }
}
