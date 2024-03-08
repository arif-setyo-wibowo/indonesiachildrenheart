<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori_beritas';
    public $primaryKey = 'idkategori';

    public function beritas()
    {
        return $this->hasMany(Berita::class, 'idkategori');
    }
}
