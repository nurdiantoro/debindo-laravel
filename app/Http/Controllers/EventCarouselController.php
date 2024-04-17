<?php

namespace App\Http\Controllers;

use App\Models\EventCarousel;
use Illuminate\Http\Request;

class EventCarouselController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('foto')) {
            $validate = $request->validate(['foto' => 'mimes:jpeg,png,jpg']);
            if ($validate) {
                $imageName = time() . '_' . $request->file('foto')->getClientOriginalName();
                $image = $request->file('foto');
                $image->move(public_path('assets/img/event/'), $imageName);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = 'default.jpg';
        }

        EventCarousel::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'foto' => $imageName,
            'urutan' => $request->urutan,
        ]);

        return redirect()->back()->with(['pesan' => 'Data berhasil terkirim']);
    }

    public function update(Request $request)
    {
        if ($request->hasFile('foto')) {
            $validate = $request->validate(['foto' => 'mimes:jpeg,png,jpg']);
            if ($validate) {
                // upload image baru
                $imageName = time() . '_' . $request->file('foto')->getClientOriginalName();
                $image = $request->file('foto');
                $image->move(public_path('assets/img/event/'), $imageName);

                // delete image lama
                $foto_delete = EventCarousel::find($request->id)->foto;
                $file_path = public_path('assets/img/event/' . $foto_delete);
                unlink($file_path);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = $request->foto_lama;
        }

        $update = EventCarousel::find($request->id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'foto' => $imageName,
            'urutan' => $request->urutan,
        ]);
        if ($update) {
            $pesan = "Event Carousel berhasil di update";
        } else {
            $pesan = "Event Carousel gagal di update";
        }
        return redirect()->back()->with(["pesan" => $pesan]);
    }

    public function destroy(string $id)
    {
        $event_carousel = EventCarousel::find($id);
        $pesan = 'Data berhasil dihapus';

        if ($event_carousel->foto != NULL) {
            $file_path = public_path('assets/img/event/' . $event_carousel->foto);
            if (unlink($file_path)) {
                $pesan = 'Data berhasil dihapus';
            } else {
                $pesan = 'Data gagal dihapus';
            }
        } else {
        }
        EventCarousel::where('id', $id)->delete();
        return redirect()->back()->with(['pesan' => $pesan]);
    }
}
