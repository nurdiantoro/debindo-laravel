<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('logo')) {
            $validate = $request->validate(['logo' => 'mimes:jpeg,png,jpg|max:1000']);
            if ($validate) {
                $imageName = time() . '_' . $request->file('logo')->getClientOriginalName();
                $image = $request->file('logo');
                $image->move(public_path('storage/img/partner/'), $imageName);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = '';
        }

        if ($request->urutan == null) {
            $urutan = Partner::all()->count() + 1;
        } else {
            $urutan = $request->urutan;
        }

        if ($request->name == null) {
            $name = $imageName;
        } else {
            $name = $request->name;
        }

        Partner::create([
            'logo' => $imageName,
            'urutan' => $urutan,
            'name' => $name,
        ]);

        return redirect()->back()->with(['pesan' => 'Data berhasil terkirim']);
    }

    public function update(Request $request)
    {

        if ($request->hasFile('logo')) {
            $validate = $request->validate(['logo' => 'mimes:jpeg,png,jpg|max:1000']);
            if ($validate) {
                $imageName = time() . '_' . $request->file('logo')->getClientOriginalName();
                $image = $request->file('logo');
                $image->move(public_path('storage/img/partner/'), $imageName);

                // delete image lama
                // $logo_delete = Partner::find($request->id)->logo;
                // $file_path = public_path('storage/img/partner/' . $logo_delete);
                // unlink($file_path);
            } else {
                return redirect()->back()->withErrors($validate);
            }
        } else {
            $imageName = $request->logo_lama;
        }

        $update = Partner::find($request->id)->update([
            'logo' => $imageName,
            'urutan' => $request->urutan,
            'name' => $request->name,
        ]);
        if ($update) {
            $pesan = "partner berhasil di update";
        } else {
            $pesan = "partner gagal di update";
        }
        return redirect('/dashboard/partner')->with(["pesan" => $pesan]);
    }

    public function updateUrutan(Request $request)
    {
        // dd($request->all());
        foreach ($request->id as $id) {
            Partner::where('id', $id)->update(['urutan' => $request->urutan[$id]]);
        };
        return redirect('/dashboard/partner')->with(['pesan' => 'Urutan berhasil diupdate']);
    }

    public function destroy(string $id)
    {
        $partner = Partner::find($id);
        $pesan = 'Data berhasil dihapus';

        // delete image lama
        // if ($partner->logo != NULL) {
        //     $file_path = public_path('storage/img/partner/' . $partner->logo);
        //     if (unlink($file_path)) {
        //         $pesan = 'Data berhasil dihapus';
        //     } else {
        //         $pesan = 'Data gagal dihapus';
        //     }
        // } else {
        // }
        Partner::where('id', $id)->delete();
        return redirect()->back()->with(['pesan' => $pesan]);
    }
}
