<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Berita',
            'berita' => Berita::with('kategori')->paginate(10), 
            'kategori' => Kategori::all(),
        ];
    
        return view('berita', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function detail()
    {
        $data = [
            'title' => 'Berita Detail'
        ];

        return view('berita_detail',$data);
    }

    public function beritaByKategori($idkategori)
    {
        $data = [
            'title' => 'Berita',
            'kategori' => Kategori::all(),
            'berita' => Berita::where('idkategori', $idkategori)->paginate(10)
        ];

        return view('berita',$data);
    }
    
    public function beritaByArchive($monthYear)
    {
        
        $date = Carbon::parse($monthYear);
        $data = [
            'title' => 'Berita',
            'kategori' => Kategori::all(),
            'berita' => Berita::whereMonth('created_at', $date->month)
            ->whereYear('created_at', $date->year)
            ->paginate(10)
        ];

        return view('berita', $data);
    }

    public function searchBerita(Request $request)
    {
        
        $keyword = $request->keyword;
        dd($keyword);
        $data = [
            'title' => 'Berita',
            'kategori' => Kategori::all(),
            'berita' => Berita::where('judul', 'like', '%' . $keyword . '%')
            ->orWhere('isi', 'like', '%' . $keyword . '%')
            ->paginate(10)
        ];
        dd($data);

        //return view('berita',$data);
    }
}
