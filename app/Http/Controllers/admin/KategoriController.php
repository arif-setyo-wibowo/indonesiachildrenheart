<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Kategori Berita",
            'kategori' => Kategori::all()
        ];
        return view('admin/admin_kategori_berita',$data);
    }

    public function storeUpdate(Request $request){
        if ($request->proses == 'Tambah') {
            $kategori = new Kategori;
            $kategori->kategori = $request->kategori;
            $kategori->save();
            Session::flash('msg', 'Berhasil Menambah Data Kategori');
            return redirect()->route('admin.kategori');
        }elseif ($request->proses == 'Update') {
            $kategori = Kategori::find($request->idkategori);
            $kategori->kategori = $request->kategori;
            $kategori->save();
            Session::flash('msg', 'Berhasil Mengubah Data Kategori');
            return redirect()->route('admin.kategori');
        }
    }

    public function destroy(Request $request){
        $id = $request->query('id');
        $kategori = Kategori::find($id);
        $kategori->delete();
        Session::flash('msg', 'Berhasil Menghapus Data Kategori');
        return redirect()->route('admin.kategori');
    }
}
