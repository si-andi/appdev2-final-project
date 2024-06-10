<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function destroy(Photo $photo)
    {
        // Delete the photo from storage
        Storage::delete($photo->photo_path);
    
        // Delete the photo from the database
        $photo->delete();
    
        return redirect()->back()->with('success', 'Photo deleted successfully.');
    }
}    