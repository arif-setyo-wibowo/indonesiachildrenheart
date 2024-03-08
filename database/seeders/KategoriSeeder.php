<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `kategori_beritas` (`idkategori`, `kategori`,`created_at`, `updated_at`) VALUES ('1', 'kategori', CURRENT_DATE(), CURRENT_DATE());";
        DB::statement($query);
    }
}
