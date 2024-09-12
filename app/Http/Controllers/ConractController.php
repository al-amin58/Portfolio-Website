<?php

namespace App\Http\Controllers;

use App\Models\Conract;
use Illuminate\Http\Request;

class ConractController extends Controller
{
    public function index(){
        $contact = Conract::first();
        return view('Backend.contact', compact('contact'));
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'address' => 'nullable|string|max:255',
            'number' => 'nullable|string|max:11',
            'email' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
        ]);
        $contact = Conract::first();
        if (!$contact){
            $contact = new Conract;
        }
        $contact->title = $request->input('title');
        $contact->description = $request->input('description');
        $contact->address = $request->input('address');
        $contact->number = $request->input('number');
        $contact->email = $request->input('email');
        $contact->website = $request->input('website');
        //Handle the image upload
        if ($request->hasFile('image')){
            if ($contact->image && Storage::exists($contact->image)){
                Storage::delete($contact->image);
            }
            $image = $request->file('image');
            $imageName = time(). '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('images', $imageName, 'public');
            $contact->image = $path;
        }
        $contact->save();

        return redirect()->back()->with('success', 'Update Successfully !');
    }

}
