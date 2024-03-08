<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `beritas` (`idberita`, `judul`, `isi`, `idkategori`, `cover`, `foto_tambahan`, `created_at`, `updated_at`) VALUES ('1', 'Judul', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore maxime, eaque culpa error reprehenderit amet atque sit necessitatibus tempore hic aspernatur enim aliquid ullam doloremque sed nemo libero et, similique aliquam, optio temporibus impedit odio! Adipisci voluptatum ipsam recusandae error quia laudantium facere ea omnis ducimus a explicabo possimus nam, aperiam tenetur. Laboriosam animi repellat at sed natus sint esse maiores aperiam saepe eligendi accusamus, vero debitis quia nemo provident quas commodi tempora veritatis nihil facilis dolores hic quae amet! Error eum, ea exercitationem aperiam harum reprehenderit obcaecati, deserunt sapiente eveniet perferendis, architecto tenetur accusantium? Non sunt labore eum deleniti!','1', 'blog.jpg','blog_1.jpg,blog_2.jpg', CURRENT_DATE(), CURRENT_DATE());";
        DB::statement($query);
    }
}
