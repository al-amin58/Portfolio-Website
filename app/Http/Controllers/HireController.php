<?php

namespace App\Http\Controllers;

use App\Models\Hire;
use Illuminate\Http\Request;

class HireController extends Controller
{
    public function index(){
        $hire = Hire::first();
        return view('Backend.hire', compact('hire'));
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'awards' => 'nullable|string|max:255',
            'projects' => 'nullable|string|max:255',
            'customers' => 'nullable|string|max:255',
            'coffee' => 'nullable|string|max:255',
        ]);
        $hire = Hire::first();
        if (!$hire){
            $hire = new Hire;
        }
        $hire->title = $request->input('title');
        $hire->description = $request->input('description');
        $hire->awards = $request->input('awards');
        $hire->projects = $request->input('projects');
        $hire->customers = $request->input('customers');
        $hire->coffee = $request->input('coffee');
        //Handle the image upload
        if ($request->hasFile('image')){
            if ($hire->image && Storage::exists($hire->image)){
                Storage::delete($hire->image);
            }
            $image = $request->file('image');
            $imageName = time(). '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('images', $imageName, 'public');
            $hire->image = $path;
        }
        $hire->save();

        return redirect()->back()->with('success', 'Update Successfully !');
    }


}
