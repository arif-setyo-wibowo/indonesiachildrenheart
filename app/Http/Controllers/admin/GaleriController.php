<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Galeri',
            'galeri' => Galeri::all()
        ];

        return view('admin/admin_galeri', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function storeUpdate(Request $request)
    {
        if ($request->proses == 'Tambah') {
            $request->validate([
                'gambar.*' => 'image|mimes:jpg,jpeg,png,svg',
            ]);


            $galeri = new Galeri;
            $galeri->nama = $request->nama;

            $gambar = [];
            if ($request->hasFile('foto')) {
                foreach ($request->file('foto') as $foto) {
                    $fotoName = Str::random(20) . '.' . $foto->getClientOriginalExtension();
                    $foto->move(public_path('uploads'), $fotoName);
                    $gambar[] = $fotoName;
                }
                $galeri->gambar = implode(',', $gambar);
            }
            $galeri->save();
            Session::flash('msg', 'Berhasil Menambah Data Gambar');
            return redirect()->route('admin.galeri');
        } elseif ($request->proses == 'Update') {
            $request->validate([
                'gambar.*' => 'image|mimes:jpg,jpeg,png,svg',
            ]);

            $galeri = Galeri::find($request->idgaleri);
            $galeri->nama = $request->nama;

            $gambar = [];
            if ($request->hasFile('foto')) {
                foreach ($request->file('foto') as $foto) {
                    $fotoName = Str::random(20) . '.' . $foto->getClientOriginalExtension();
                    $foto->move(public_path('uploads'), $fotoName);
                    $gambar[] = $fotoName;
                }
                $galeri->gambar = implode(',', $gambar);
            }
            $galeri->save();

            Session::flash('msg', 'Berhasil Mengubah Data Gambar');
            return redirect()->route('admin.galeri');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->query('id');
        $galeri = Galeri::find($id);

        $fotoPaths = explode(',', $galeri->foto);
        foreach ($fotoPaths as $fotoPath) {
            File::delete('uploads/' . $fotoPath);
        }
        $galeri->delete();
        Session::flash('msg', 'Berhasil Menghapus Data Gambar');
        return redirect()->route('admin.galeri');
    }
}
