<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Berita',
            'kategori'  => Kategori::all(),
            'berita' => Berita::with('kategori')->get()
        ];

        return view('admin/admin_berita',$data);
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function storeUpdate(Request $request)
    {
        if ($request->proses == 'Tambah') {
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,svg',
                'foto_tambahan.*' => 'image|mimes:jpg,jpeg,png,svg',
            ]);
            

            $berita = new Berita;
            $berita->judul = $request->judul;
            $berita->isi = $request->isi;
            $berita->idkategori = $request->idkategori;
            
            if ($request->file('foto')) {
                File::delete('uploads/'.$berita->cover);
                $foto = $request->file('foto');
                $fotoName = Str::random(20) . '.' . $foto->getClientOriginalExtension();
                $foto->move(public_path('uploads'), $fotoName);
                $berita->cover = $fotoName;
            }

            $foto_tambahan = [];
            if ($request->hasFile('foto_tambahan')) {
                foreach ($request->file('foto_tambahan') as $foto) {
                    $fotoName = Str::random(20) . '.' . $foto->getClientOriginalExtension();
                    $foto->move(public_path('uploads'), $fotoName);
                    $foto_tambahan[] = $fotoName;
                }
                $berita->foto_tambahan = implode(',', $foto_tambahan);
            }

            $berita->save();
            Session::flash('msg', 'Berhasil Menambah Data Berita');
            return redirect()->route('admin.berita');
        }elseif ($request->proses == 'Update') {
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,svg',
                'foto_tambahan.*' => 'image|mimes:jpg,jpeg,png,svg',
            ]);
            
            $berita = Berita::find($request->idberita);
            $berita->judul = $request->judul;
            $berita->isi = $request->isi;
            $berita->idkategori = $request->idkategori;
            
            if ($request->file('foto')) {
                File::delete('uploads/'.$berita->cover);
                $foto = $request->file('foto');
                $fotoName = Str::random(20) . '.' . $foto->getClientOriginalExtension();
                $foto->move(public_path('uploads'), $fotoName);
                $berita->cover = $fotoName;
            }

            $foto_tambahan = [];
            if ($request->hasFile('foto_tambahan')) {
                foreach ($request->file('foto_tambahan') as $foto) {
                    $fotoName = Str::random(20) . '.' . $foto->getClientOriginalExtension();
                    $foto->move(public_path('uploads'), $fotoName);
                    $foto_tambahan[] = $fotoName;
                }
                $berita->foto_tambahan = implode(',', $foto_tambahan);
            }

            $berita->save();
            Session::flash('msg', 'Berhasil Mengubah Data Berita');
            return redirect()->route('admin.berita');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->query('id');
        $berita = Berita::find($id);

        $fotoPaths = explode(',', $berita->foto_tambahan);
        foreach ($fotoPaths as $fotoPath) {
            File::delete('uploads/'.$fotoPath);
        }
        $berita->delete();
        Session::flash('msg', 'Berhasil Menghapus Data Berita');
        return redirect()->route('admin.berita');
    }
}
