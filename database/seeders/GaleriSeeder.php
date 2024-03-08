<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Galeri;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Galeri::create([
            "nama" => "1st Gathering",
            "gambar" => "apSvFX9wGCAHqTFrBzvu.jpg,SdWbpEDB5yeEEQyF5EiB.jpg,D6vwu4vvO9WYEyZuD3qV.jpg,bGiQMoep93NQSvv8pLhS.jpg,G4LZHyYAsrdtz4JIKQ0B.jpg,UMF4X8lQOjMDJlP8XZje.jpg",
        ]);
    }
}
