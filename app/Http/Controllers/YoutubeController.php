<?php

namespace App\Http\Controllers;

use App\Models\Youtube;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('thumbnail')) {
            $validate = $request->validate(['thumbnail' => 'mimes:jpeg,png,jpg']);
            if ($validate) {
                $imageName = time() . '_' . $request->file('thumbnail')->getClientOriginalName();
                $image = $request->file('thumbnail');
                $image->move(public_path('assets/img/youtube/'), $imageName);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = '';
        }

        Youtube::create([
            'title' => $request->title,
            'thumbnail' => $imageName,
            'link' => $request->link,
        ]);

        return redirect()->back()->with(['pesan' => 'Data berhasil terkirim']);
    }

    public function update(Request $request)
    {
        if ($request->hasFile('thumbnail')) {
            $validate = $request->validate(['thumbnail' => 'mimes:jpeg,png,jpg']);
            if ($validate) {
                $imageName = time() . '_' . $request->file('thumbnail')->getClientOriginalName();
                $image = $request->file('thumbnail');
                $image->move(public_path('assets/img/youtube/'), $imageName);

                // delete image lama
                // $thumbnail_delete = Youtube::find($request->id)->thumbnail;
                // $file_path = public_path('assets/img/youtube/' . $thumbnail_delete);
                // unlink($file_path);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = $request->thumbnail_lama;
        }

        $update = Youtube::find($request->id)->update([
            'title' => $request->title,
            'thumbnail' => $imageName,
            'link' => $request->link,
        ]);
        if ($update) {
            $pesan = "Youtube berhasil di update";
        } else {
            $pesan = "Youtube gagal di update";
        }
        return redirect()->back()->with(["pesan" => $pesan]);
    }

    public function destroy(string $id)
    {
        $youtube = Youtube::find($id);
        $pesan = 'Data berhasil dihapus';

        // delete image lama
        // if ($youtube->thumbnail != NULL) {
        //     $file_path = public_path('assets/img/youtube/' . $youtube->thumbnail);
        //     if (unlink($file_path)) {
        //         $pesan = 'Data berhasil dihapus';
        //     } else {
        //         $pesan = 'Data gagal dihapus';
        //     }
        // }
        Youtube::where('id', $id)->delete();
        return redirect()->back()->with(['pesan' => $pesan]);
    }
}
