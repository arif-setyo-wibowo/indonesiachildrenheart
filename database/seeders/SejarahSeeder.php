<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `abouts` (`idsejarah`, `judul`, `dekripsi`, `visi`, `misi`, `foto`, `created_at`, `updated_at`) VALUES ('1', 'Judul', 'Deskripsi', 'visi', 'misi', 'sejarah.jpg', CURRENT_DATE(), CURRENT_DATE());";
        DB::statement($query);
    }
}
