<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{

    public function store(Request $request)
    {
        if ($request->hasFile('logo')) {
            $validate = $request->validate(['logo' => 'mimes:jpeg,png,jpg|max:1000']);
            if ($validate) {
                $imageName = time() . '_' . $request->file('logo')->getClientOriginalName();
                $image = $request->file('logo');
                $image->move(public_path('storage/img/event/'), $imageName);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = '';
        }

        $store = Event::create([
            'judul' => $request->judul,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'lokasi' => $request->lokasi,
            'addition' => $request->addition,
            'logo' => $imageName,
            'eo' => $request->eo,
        ]);

        if ($store) {
            $pesan = 'Data berhasil terkirim';
        } else {
            $pesan = 'Data gagal terkirim';
        }
        return redirect()->route('dashboard_event')->with(['pesan' => $pesan]);
    }

    public function update(Request $request)
    {
        // Jika Ada logo, Upload dan Update logo baru, logo lama di hapus dari directory
        if ($request->hasFile('logo')) {
            $validate = $request->validate(['logo' => 'mimes:jpeg,png,jpg|max:1000']);
            if ($validate) {

                // Upload Logo baru
                $imageName = time() . '_' . $request->file('logo')->getClientOriginalName();
                $image = $request->file('logo');
                $image->move(public_path('storage/img/event/'), $imageName);

                // Hapus Logo lama
                // $file_path = public_path('storage/img/event/' . Event::find($id)->logo);
                // unlink($file_path);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = $request->logo_lama;
        }

        Event::where('id', $request->id)->update([
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

        // delete image lama
        // if ($event->logo != NULL) {
        //     $file_path = public_path('storage/img/event/' . $event->logo);
        //     if (unlink($file_path)) {
        //         $pesan = 'Data berhasil dihapus';
        //     } else {
        //         $pesan = 'Data gagal dihapus';
        //     }
        // } else {
        // }
        Event::where('id', $id)->delete();
        return redirect('dashboard/event')->with(['pesan' => $pesan]);
    }
}
