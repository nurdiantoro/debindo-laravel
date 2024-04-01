<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function login_submit(Request $request)
    {
        $data_login = [
            "email" => $request->email,
            "password" => $request->password,
        ];
        if (Auth::attempt($data_login)) {
            return redirect('dashboard');
        } else {
            return redirect()->back()->with('pesan', 'The email or password you used is incorrect');
        }
    }
    public function registration()
    {
        return view("auth.registration");
    }

    public function registration_submit(Request $request)
    {
        $validasi_email = $request->validate([
            'email' => ['unique:users'],
        ]);

        if ($validasi_email) {
            User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password,
            ]);
            return redirect("login")->with("pesan");
        } else {
            return redirect()->back()->with('pesan');
        }
    }
    public function logout(Request $request)
    {
    }
}
