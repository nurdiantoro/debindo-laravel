<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->isi);
        if ($request->hasFile('image')) {
            $validate = $request->validate(['image' => 'mimes:jpeg,png,jpg|max:1000']);
            if ($validate) {
                $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs('img/news/', $imageName, 'public');
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = '';
        }

        News::create([
            'judul' => $request->judul,
            'tgl_post' => $request->tgl_post,
            'nama_penulis' => $request->nama_penulis,
            'isi' => $request->isi,
            'image' => $imageName,
        ]);

        return redirect()->back()->with(['success' => 'News Berhasil Ditambahkan', 'console' => 'Kamu menambahkan news ' . $request->judul]);
    }

    public function update(Request $request)
    {

        $update = News::find($request->id)->update($request->all());
        if ($update) {
            $pesan = "News berhasil di update";
        } else {
            $pesan = "News gagal di update";
        }
        return redirect('dashboard/news')->with(["pesan" => $pesan]);
    }

    public function destroy(string $id)
    {
        $news = News::find($id);
        $pesan = 'Data berhasil dihapus';

        // delete image lama
        // if ($news->image != NULL) {
        //     $file_path = public_path('assets/img/news/' . $news->image);
        //     if (unlink($file_path)) {
        //         $pesan = 'Data berhasil dihapus';
        //     } else {
        //         $pesan = 'Data gagal dihapus';
        //     }
        // }
        News::where('id', $id)->delete();
        return redirect()->back()->with(['pesan' => $pesan]);
    }
}
