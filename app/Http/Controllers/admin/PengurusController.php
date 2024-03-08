<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Pengurus',
            'pengurus' => Pengurus::all()
        ];

        return view('admin/admin_pengurus',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function storeUpdate(Request $request)
    {
        if ($request->proses == 'Tambah') {
            $pengurus = new Pengurus;
            $pengurus->nama = $request->nama;
            $pengurus->jabatan = $request->jabatan;
            if ($request->file('foto')) {
                $foto = $request->file('foto');
                $fotoName = Str::random(20) . '.' . $foto->getClientOriginalExtension();
                $foto->move(public_path('uploads'), $fotoName);
                $pengurus->foto = $fotoName;
            }
            $pengurus->save();
            Session::flash('msg', 'Berhasil Menambah Data Pengurus');
            return redirect()->route('admin.pengurus');
        }elseif ($request->proses == 'Update') {
            $pengurus = Pengurus::find($request->idpengurus);
            $pengurus->nama = $request->nama;
            $pengurus->jabatan = $request->jabatan;
            if ($request->file('foto')) {
                File::delete('uploads/'.$pengurus->foto);
                $foto = $request->file('foto');
                $fotoName = Str::random(20) . '.' . $foto->getClientOriginalExtension();
                $foto->move(public_path('uploads'), $fotoName);
                $pengurus->foto = $fotoName;
            }
            $pengurus->save();
            Session::flash('msg', 'Berhasil Mengubah Data Pasien');
            return redirect()->route('admin.pengurus');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->query('id');
        $pengurus = Pengurus::find($id);
        File::delete('uploads/'.$pengurus->foto);
        $pengurus->delete();
        Session::flash('msg', 'Berhasil Menghapus Data Pengurus');
        return redirect()->route('admin.pengurus');
    }
}
