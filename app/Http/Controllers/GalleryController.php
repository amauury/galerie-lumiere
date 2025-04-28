<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\images;

class GalleryController extends Controller
{
    public function updateSize(Request $request)
    {
        $sizes = $request->input('sizes', []);

        foreach ($sizes as $id => $size) {
            $image = images::find($id);
            if ($image) {
                $image->class = $size;
                $image->save();
            }
        }

        return redirect()->back();
    }

    public function deleteImage($id)
    {
        $image = images::find($id);
        if ($image) {
            $image->delete();
        }

        return redirect()->back();
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'alt' => 'required|string|max:255',
            'class' => 'required|in:standard,large',
        ]);
    
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/art'), $imageName);
    


    
        $image = new images([
            'src' => $imageName,
            'alt' => $request->alt,
            'class' => $request->class,
        ]);
        $image->save();
    
        return back();
    }
    public function index()
    {
        $gallery = images::orderBy('id')->get();
        return view('index', compact('gallery'));
    }
    

    public function moveUp($id)
    {
        $currentImage = images::find($id);
        $previousImage = images::where('id', '<', $currentImage->id)
                              ->orderBy('id', 'desc')
                              ->first();
    
        if ($previousImage) {
            $currentId = $currentImage->id;
            $previousId = $previousImage->id;
    
            $currentImage->id = -1;
            $currentImage->save();
    
            $previousImage->id = $currentId;
            $previousImage->save();
    
            $currentImage->id = $previousId;
            $currentImage->save();
        }
    
        return redirect()->back();
    }
    
    public function moveDown($id)
    {
        $currentImage = images::find($id);
        $nextImage = images::where('id', '>', $currentImage->id)
                          ->orderBy('id', 'asc')
                          ->first();
    
        if ($nextImage) {
            $currentId = $currentImage->id;
            $nextId = $nextImage->id;
            $currentImage->id = -1;
            $currentImage->save();
    
            $nextImage->id = $currentId;
            $nextImage->save();
    
            $currentImage->id = $nextId;
            $currentImage->save();
        }
    
        return redirect()->back();
    }
}
