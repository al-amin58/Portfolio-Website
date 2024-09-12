<?php

namespace App\Http\Controllers;

use App\Models\About;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index(){
        $about = About::first();
        return view('Backend.about', compact('about'));
    }

    public function update(Request $request){
        $request->validate([
           'section_name' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'cv' => 'nullable|file|mimes:pdf|max:2048',
        ]);
        $about = About::first();
        if (!$about){
            $about = new About;
        }
        $about->section_name = $request->input('section_name');
        $about->name = $request->input('name');
        $about->email = $request->input('email');
        $about->description = $request->input('description');
        //Handle the image upload
        if ($request->hasFile('image')){
            if ($about->image && Storage::exists($about->image)){
                Storage::delete($about->image);
            }
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $about->image = $path;
        }
        //Handle the cv upload
        if ($request->hasFile('cv')){
            if ($about->cv && Storage::exists($about->cv)){
                Storage::delete($about->cv);
            }
            $cv = $request->file('cv');
            $path = $cv->store('cv', 'public');
            $about->cv = $path;
        }

        $about->save();

        return redirect()->back()->with('success', 'Update Successfully !');
    }

    //download cv form database
    public function downloadCv(){
        $about = About::first();
        if ($about && $about->cv && Storage::disk('public')->exists($about->cv)) {
            return Storage::disk('public')->download($about->cv);
        }
        return redirect()->back()->with('error', 'CV not found.');
    }
}
