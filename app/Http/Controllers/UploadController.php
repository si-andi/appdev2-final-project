<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class UploadController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('home', compact('photos'));
    }

    public function create()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'required|image',
        ]);

        $photoPath = $request->file('photo')->store('photos', 'public');

        Photo::create([
            'title' => $request->title,
            'description' => $request->description,
            'photo_path' => $photoPath,
        ]);

        return redirect()->route('home');
    }

    
}
