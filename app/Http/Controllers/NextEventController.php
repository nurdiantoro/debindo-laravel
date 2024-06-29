<?php

namespace App\Http\Controllers;

use App\Models\NextEvent;
use Illuminate\Http\Request;

class NextEventController extends Controller
{
    public function store(Request $request)
    {
        $imageName = '';

        if ($request->hasFile('image')) {
            $validate = $request->validate(['image' => 'mimes:jpeg,png,jpg|max:1000']);
            if ($validate) {
                $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
                $image = $request->file('image');
                $image->move(public_path('storage/img/event/'), $imageName);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        }

        $store = NextEvent::create([
            'name' => $request->name,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'link' => $request->link,
            'image' => $imageName,
            'urutan' => $request->urutan,
        ]);

        if ($store) {
            $pesan = 'Data berhasil terkirim';
        } else {
            $pesan = 'Data gagal terkirim';
        }
        return redirect()->route('dashboard')->with(['pesan' => $pesan]);
    }

    public function update(Request $request)
    {
        if ($request->hasFile('image')) {
            $validate = $request->validate(['image' => 'mimes:jpeg,png,jpg']);
            if ($validate) {

                // Upload image baru
                $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
                $image = $request->file('image');
                $image->move(public_path('storage/img/event/'), $imageName);

                // Hapus image lama
                // $file_path = public_path('storage/img/event/' . Event::find($id)->image);
                // unlink($file_path);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = $request->image_lama;
        }

        NextEvent::where('id', $request->id)->update([
            'name' => $request->name,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'link' => $request->link,
            'image' => $imageName,
            'urutan' => $request->urutan,
        ]);

        return redirect('dashboard')->with(['pesan' => 'Data berhasil diubah']);
    }

    public function destroy(string $id)
    {
        $next_event = NextEvent::find($id);
        $pesan = 'Data berhasil dihapus';

        // delete image lama
        // if ($next_event->image != NULL) {
        //     $file_path = public_path('assets/img/event/' . $next_event->image);
        //     if (unlink($file_path)) {
        //         $pesan = 'Data berhasil dihapus';
        //     } else {
        //         $pesan = 'Data gagal dihapus';
        //     }
        // } else {
        // }
        NextEvent::where('id', $id)->delete();
        return redirect('dashboard')->with(['pesan' => $pesan]);
    }
}
