<?php

use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    public function run()
    {
        Photo::create([
            'title' => 'Test Photo',
            'description' => 'This is a test description.',
            'photo_path' => 'photos/test.jpg',
        ]);
    }
}
