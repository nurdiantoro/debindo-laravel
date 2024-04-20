<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
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

        Partner::create([
            'title' => $request->title,
            'thumbnail' => $imageName,
            'link' => $request->link,
        ]);

        return redirect()->back()->with(['pesan' => 'Data berhasil terkirim']);
    }

    public function update(Request $request)
    {

        $update = Partner::find($request->id)->update($request->all());
        if ($update) {
            $pesan = "Youtube berhasil di update";
        } else {
            $pesan = "Youtube gagal di update";
        }
        return redirect()->back()->with(["pesan" => $pesan]);
    }

    public function destroy(string $id)
    {
        $youtube = Partner::find($id);
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
        Partner::where('id', $id)->delete();
        return redirect()->back()->with(['pesan' => $pesan]);
    }
}
