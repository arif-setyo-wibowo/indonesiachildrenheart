<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Sejarah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Sejarah',
            'sejarah' => Sejarah::all()
        ];

        return view('admin/admin_sejarah',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        
        $sejarah = Sejarah::first();

        if ($request->file('foto')) {
            File::delete('uploads/'.$sejarah->foto);
            $foto = $request->file('foto');
            $fotoName = Str::random(20) . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('uploads'), $fotoName);
            $sejarah->foto = $fotoName;
        }

        $sejarah->judul = $request->judul;
        $sejarah->dekripsi = $request->dekripsi;
        $sejarah->visi = $request->visi;
        $sejarah->misi = $request->misi;
        $sejarah->save();

        return redirect()->route('admin.sejarah')->with(['success' => 'Berhasil Mengubah Data']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
