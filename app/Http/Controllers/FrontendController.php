<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Event;
use App\Models\EventCarousel;
use App\Models\Inbox;
use App\Models\News;
use App\Models\NewsCarousel;
use App\Models\NextEvent;
use App\Models\Partner;
use App\Models\Team;
use App\Models\Testimoni;
use App\Models\Youtube;
use App\Services\InstagramService;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $instagramService;
    public function __construct(InstagramService $instagramService)
    {
        $this->instagramService = $instagramService;
    }

    public function index()
    {
        $highlights = News::limit(4)->get();
        $testimoni = Testimoni::all();
        $youtubes = Youtube::orderBy('updated_at', 'desc')->get();
        $partners = Partner::orderBy('urutan', 'asc')->get();
        $title = "Debindo | All Event Spesialists";
        $next_events = NextEvent::orderBy('urutan', 'asc')->get();
        return view('frontend.home', [
            'highlights' => $highlights,
            'testimoni' => $testimoni,
            'youtubes' => $youtubes,
            'title' => $title,
            'partners' => $partners,
            'next_events' => $next_events
        ]);
    }

    public function event()
    {
        $eventCarousel = EventCarousel::all();
        $eventDebindo = Event::where('eo', 'Debindomulti Adhiswasti')->select('judul', 'logo', 'kota')->orderBy('tgl_mulai', 'desc')->get();
        $events = Event::select('judul', 'kota', 'tgl_mulai', 'tgl_selesai', 'eo')->get();
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
        // $dataMentah = $this->instagramService->getUserMedia();
        // $data = array_slice($dataMentah['data'], 0, 9);

        $newsCarousel = NewsCarousel::all();
        $newss = News::orderBy('tgl_post', 'desc')->get();
        $title = "Debindo | News";
        return view('frontend.news', [
            'title' => $title,
            'newsCarousel' => $newsCarousel,
            'newss' => $newss,
            // 'instagrams' => $data,
        ]);
    }
    public function news_detail($slug)
    {
        $news = News::find($slug);
        $title = $news->title;

        // dd($news->tgl_post, gettype($news->tgl_post));

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
    public function contact_store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        if ($validate) {
            Inbox::create($request->all());
            return redirect()->back()->with(['Message Sent' => 'Message Sent Successfully!']);
        } else {
            return redirect()->back()->withErrors($validate);
        }
    }

    public function instagram()
    {
        // $media = array_slice($this->instagramService->getUserMedia(), 0, 1);
        $dataMentah = $this->instagramService->getUserMedia();
        $data = array_slice($dataMentah['data'], 0, 9);

        dd($data);
        // return view('instagram', compact('media'));
    }
}
