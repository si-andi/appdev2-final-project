<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Photo;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Photo::create([
            'title' => 'Test Photo',
            'description' => 'This is a test description.',
            'photo_path' => 'photos/test.jpg',
        ]);
    }
}

