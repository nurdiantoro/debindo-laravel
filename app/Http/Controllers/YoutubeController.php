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

    public function destroy(string $id)
    {
        $youtube = Youtube::find($id);
        $pesan = 'Data berhasil dihapus';

        if ($youtube->thumbnail != NULL) {
            $file_path = public_path('assets/img/youtube/' . $youtube->thumbnail);
            if (unlink($file_path)) {
                $pesan = 'Data berhasil dihapus';
            } else {
                $pesan = 'Data gagal dihapus';
            }
        } else {
        }
        Youtube::where('id', $id)->delete();
        return redirect()->back()->with(['pesan' => $pesan]);
    }
}
