<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCarousel;
use App\Models\News;
use App\Models\NewsCarousel;
use App\Models\Partner;
use App\Models\Team;
use App\Models\Testimoni;
use App\Models\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerubahanDatabase extends Controller
{
    public function mengganti_url_logo()
    {
        $action = Event::whereNotNull('logo')->update([
            'logo' => DB::raw("CONCAT('img/event/', logo)"),
        ]);

        if ($action) {
            echo "Berhasil memperbarui $action data.";
        } else {
            echo "Tidak ada data yang diperbarui.";
        }
    }

    public function mengganti_url_team()
    {
        $action = Team::whereNotNull('foto')->update([
            'foto' => DB::raw("CONCAT('img/team/', foto)"),
        ]);

        if ($action) {
            echo "Berhasil memperbarui $action data.";
        } else {
            echo "Tidak ada data yang diperbarui.";
        }
    }

    public function mengganti_url_news()
    {
        $action = News::whereNotNull('image')->update([
            'image' => DB::raw("CONCAT('img/news/', image)"),
        ]);

        if ($action) {
            echo "Berhasil memperbarui $action data.";
        } else {
            echo "Tidak ada data yang diperbarui.";
        }
    }

    public function mengganti_url_newscarousel()
    {
        $action = NewsCarousel::whereNotNull('foto')->update([
            'foto' => DB::raw("CONCAT('img/news/', foto)"),
        ]);

        if ($action) {
            echo "Berhasil memperbarui $action data.";
        } else {
            echo "Tidak ada data yang diperbarui.";
        }
    }

    public function mengganti_url_eventcarousel()
    {
        $action = EventCarousel::whereNotNull('foto')->update([
            'foto' => DB::raw("CONCAT('img/event/', foto)"),
        ]);

        if ($action) {
            echo "Berhasil memperbarui $action data.";
        } else {
            echo "Tidak ada data yang diperbarui.";
        }
    }

    public function mengganti_url_partner()
    {
        $action = Partner::whereNotNull('logo')->update([
            'logo' => DB::raw("CONCAT('img/partner/', logo)"),
        ]);

        if ($action) {
            echo "Berhasil memperbarui $action data.";
        } else {
            echo "Tidak ada data yang diperbarui.";
        }
    }

    public function mengganti_url_testimoni()
    {
        $action = Testimoni::whereNotNull('foto')->update([
            'foto' => DB::raw("CONCAT('img/testimoni/', foto)"),
        ]);

        if ($action) {
            echo "Berhasil memperbarui $action data.";
        } else {
            echo "Tidak ada data yang diperbarui.";
        }
    }

    public function mengganti_url_youtube()
    {
        $action = Youtube::whereNotNull('thumbnail')->update([
            'thumbnail' => DB::raw("CONCAT('img/youtube/', thumbnail)"),
        ]);

        if ($action) {
            echo "Berhasil memperbarui $action data.";
        } else {
            echo "Tidak ada data yang diperbarui.";
        }
    }
}
