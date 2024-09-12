<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    public function index(){
        $hero = Hero::first();
//        dd($heroes);
        return view('Backend.hero',compact('hero'));
    }


    public function update(Request $request) {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $hero = Hero::first();
        if (!$hero) {
            $hero = new Hero;
        }

        $hero->name = $request->input('name');
        $hero->designation = $request->input('designation');

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Check if there is an old image and delete it if it exists
            if ($hero->image && Storage::exists($hero->image)) {
                Storage::delete($hero->image);
            }

            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $hero->image = $path;
        }

        $hero->save();

        return redirect()->back()->with('success', 'Update Successfully !');
    }

}
