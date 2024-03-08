<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pengurus;
use App\Models\Sejarah;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sejarah = Sejarah::all();
        $data = [
            'title' => 'Beranda',
            'sejarah' => $sejarah[0],
            'pengurus' => Pengurus::all(),
            'berita' => Berita::take(4)->get(),
        ];

        return view('home',$data);
    }
}
