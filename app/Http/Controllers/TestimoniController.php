<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('foto')) {
            $validate = $request->validate(['foto' => 'mimes:jpeg,png,jpg']);
            if ($validate) {
                $imageName = time() . '_' . $request->file('foto')->getClientOriginalName();
                $image = $request->file('foto');
                $image->move(public_path('assets/img/testimoni/'), $imageName);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = '';
        }

        Testimoni::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'testimoni' => $request->testimoni,
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
                $image->move(public_path('assets/img/testimoni/'), $imageName);

                // delete image lama
                // $foto_delete = Testimoni::find($request->id)->foto;
                // $file_path = public_path('assets/img/testimoni/' . $foto_delete);
                // unlink($file_path);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = $request->foto_lama;
        }

        $update = Testimoni::find($request->id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'testimoni' => $request->testimoni,
            'foto' => $imageName,
        ]);
        if ($update) {
            $pesan = "Testimoni berhasil di update";
        } else {
            $pesan = "Testimoni gagal di update";
        }
        return redirect()->back()->with(["pesan" => $pesan]);
    }

    public function destroy(string $id)
    {
        $testimoni = Testimoni::find($id);
        $pesan = 'Data berhasil dihapus';

        // delete image lama
        // if ($testimoni->thumbnail != NULL) {
        //     $file_path = public_path('assets/img/testimoni/' . $testimoni->thumbnail);
        //     if (unlink($file_path)) {
        //         $pesan = 'Data berhasil dihapus';
        //     } else {
        //         $pesan = 'Data gagal dihapus';
        //     }
        // } else {
        // }
        Testimoni::where('id', $id)->delete();
        return redirect()->back()->with(['pesan' => $pesan]);
    }
}
