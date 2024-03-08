<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `penguruses` (`idpengurus`, `nama`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES ('1', 'Nama', 'Jabatan', 'pengurus.jpg', CURRENT_DATE(), CURRENT_DATE());";
        DB::statement($query);
    }
}
