<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run()
    {
        // Buat 3 kategori
        $kategori1 = Category::create([
            'name' => 'Tutorial',
            'slug' => Str::slug('Tutorial'),
            'description' => 'Kumpulan tutorial programming dan web dev.'
        ]);

        $kategori2 = Category::create([
            'name' => 'Review',
            'slug' => Str::slug('Review'),
            'description' => 'Review tools dan software developer.'
        ]);

        $kategori3 = Category::create([
            'name' => 'Tips & Tricks',
            'slug' => Str::slug('Tips & Tricks'),
            'description' => 'Tips coding, karir, dan produktivitas.'
        ]);

        // Contoh post
        Post::create([
            'title' => 'Cara Membuat Artikel di Laravel dengan Filament',
            'slug' => Str::slug('Cara Membuat Artikel di Laravel dengan Filament'),
            'excerpt' => 'Panduan singkat membuat artikel menggunakan Filament Admin.',
            'content' => 'Ini adalah contoh konten artikel untuk testing di dashboard Filament.',
            'hero_image' => null,
            'category_id' => $kategori1->id,
            'author_id' => null, // ganti sesuai ID admin kamu
            'is_featured' => true,
            'status' => 'published',
            'published_at' => now(),
            'seo_title' => 'Membuat Artikel di Laravel',
            'seo_description' => 'Panduan membuat artikel menggunakan Filament Admin Laravel.'
        ]);
    }
}
