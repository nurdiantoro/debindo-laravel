<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('foto')) {
            $validate = $request->validate(['foto' => 'mimes:jpeg,png,jpg']);
            if ($validate) {
                $imageName = time() . '_' . $request->file('foto')->getClientOriginalName();
                $image = $request->file('foto');
                $image->move(public_path('assets/img/team/'), $imageName);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = 'default.jpg';
        }

        Team::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tingkat_jabatan' => $request->tingkat_jabatan,
            'email' => $request->email,
            'linkedin' => $request->linkedin,
            'foto' => $imageName,
            'urutan' => $request->urutan,
        ]);

        return redirect()->back()->with(['pesan' => 'Data berhasil terkirim']);
    }

    public function update(Request $request)
    {

        $update = Team::find($request->id)->update($request->all());
        if ($update) {
            $pesan = "Team berhasil di update";
        } else {
            $pesan = "Team gagal di update";
        }
        return redirect()->back()->with(["pesan" => $pesan]);
    }

    public function destroy(string $id)
    {
        $team = Team::find($id);
        $pesan = 'Data berhasil dihapus';

        if ($team->foto != 'default.jpg') {
            $file_path = public_path('assets/img/team/' . $team->foto);
            if (unlink($file_path)) {
                $pesan = 'Data berhasil dihapus';
            } else {
                $pesan = 'Data gagal dihapus';
            }
        } else {
        }
        Team::where('id', $id)->delete();
        return redirect()->back()->with(['pesan' => $pesan]);
    }
}
