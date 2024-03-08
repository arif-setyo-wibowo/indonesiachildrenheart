<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Petugas',
            'petugas' => Petugas::all()
        ];

        return view('admin/admin_petugas',$data);
    }

    public function storeUpdate(Request $request){
        if ($request->proses == 'Tambah') {
            $request->validate([
                'username' => 'unique:petugas',
            ]);
            $user = new Petugas;
            $user->nama = $request->nama;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->save();
            Session::flash('msg', 'Berhasil Menambah Data User');
            return redirect()->route('admin.petugas');
        }elseif ($request->proses == 'Update') {
            
            $user = Petugas::find($request->id);

            $request->validate([
                'username'=> Rule::unique('petugas')->ignore($user->id)
            ]);

            if($request->password == null){
                $password = $request->password_lama;
            }else{
                $password = Hash::make($request->password);
            }
    
            if ($request->nama_user == null) {
                session(['nama.admin' => $user->nama_user]);
            }else{
                session()->forget('nama.admin'); 
                session(['nama.admin' => $request->nama_user]);
            }

            $user->nama = $request->nama;
            $user->username = $request->username;
            $user->password = $password;
            $user->save();


            Session::flash('msg', 'Berhasil Mengubah Data User');
            return redirect()->route('admin.petugas');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->query('id');
        $petugas = Petugas::find($id);
        $petugas->delete();
        Session::flash('msg', 'Berhasil Menghapus Data Petugas');
        return redirect()->route('admin.petugas');
    }
}
