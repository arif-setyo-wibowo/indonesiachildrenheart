<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Petugas;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.login');
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],[
            'username.required' => 'Username admin harus diisi.',
            'username.username' => 'Username admin tidak valid.',
            'password.required' => 'Kata sandi admin harus diisi.',
        ]);

        $user = Petugas::where('username', $request->username)->first();

        if ($user) {
            if (password_verify($request->password, $user->password)) {
                    session(['admin' => true]);
                    session(['user.admin' => $user->username]);
                    session(['nama.admin' => $user->nama]);                                  
                    return redirect()->route('dashboard');
            } else {
                return redirect()->route('login')->withErrors(['error' => 'Password salah'])->withInput();
            }
        } else {
            return redirect()->route('login')->withErrors(['error' => 'Username tidak ditemukan'])->withInput();
        }
    }

    public function logout (){
        session()->forget('admin');
        session()->forget('user.admin');
        session()->forget('nama.admin'); 
        return redirect()->route('login');
    }
}
