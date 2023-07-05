<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Posts;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name'=> 'Berita',
            'slug'=> 'berita'
        ]);

        Category::create([
            'name'=> 'Artikel',
            'slug'=> 'artikel'
        ]);

        Category::create([
            'name'=> 'Kegiatan',
            'slug'=> 'kegiatan'
        ]);

        Category::create([
            'name'=> 'Nakes Teladan',
            'slug'=> 'nakes-teladan'
        ]);

        Posts::factory(20)->create();
    }
}
