<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{

    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        if ($request->hasFile('logo')) {
            $validate = $request->validate(['logo' => 'mimes:jpeg,png,jpg']);
            if ($validate) {
                $imageName = time() . '_' . $request->file('logo')->getClientOriginalName();
                $image = $request->file('logo');
                $image->move(public_path('assets/img/event/'), $imageName);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = '';
        }

        Event::create([
            'judul' => $request->judul,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'lokasi' => $request->lokasi,
            'addition' => $request->addition,
            'logo' => $imageName,
            'eo' => $request->eo,
        ]);

        return redirect()->route('dashboard_event')->with(['pesan' => 'Data berhasil terkirim']);
    }

    public function show(string $id)
    {
    }
    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
        // Jika Ada logo, Upload dan Update logo baru, logo lama di hapus dari directory
        if ($request->hasFile('logo')) {
            $validate = $request->validate(['logo' => 'mimes:jpeg,png,jpg']);
            if ($validate) {

                // Upload Logo baru
                $imageName = time() . '_' . $request->file('logo')->getClientOriginalName();
                $image = $request->file('logo');
                $image->move(public_path('assets/img/event/'), $imageName);

                // Hapus Logo lama
                $file_path = public_path('assets/img/event/' . Event::find($id)->logo);
                unlink($file_path);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = $request->logo_lama;
        }

        Event::where('id', $id)->update([
            'judul' => $request->judul,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'lokasi' => $request->lokasi,
            'additional' => $request->additional,
            'logo' => $imageName,
            'eo' => $request->eo,
        ]);

        return redirect('dashboard/event')->with(['pesan' => 'Data berhasil diubah']);
    }

    public function destroy(string $id)
    {
        $event = Event::find($id);
        $pesan = 'Data berhasil dihapus';

        if ($event->logo != NULL) {
            $file_path = public_path('assets/img/event/' . $event->logo);
            if (unlink($file_path)) {
                $pesan = 'Data berhasil dihapus';
            } else {
                $pesan = 'Data gagal dihapus';
            }
        } else {
        }
        Event::where('id', $id)->delete();
        return redirect('dashboard/event')->with(['pesan' => $pesan]);
    }
}
