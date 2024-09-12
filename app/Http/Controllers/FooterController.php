<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index(){
        $footer = Footer::first();
        return view('Backend.footer', compact('footer'));
    }

    public function update(Request $request){
        $request->validate([
            'description' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'number' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'github' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
        ]);
        $footer = Footer::first();
        if (!$footer){
            $footer = new Footer;
        }
        $footer->description = $request->input('description');
        $footer->address = $request->input('address');
        $footer->number = $request->input('number');
        $footer->email = $request->input('email');
        $footer->twitter = $request->input('twitter');
        $footer->github = $request->input('github');
        $footer->linkedin = $request->input('linkedin');
        $footer->facebook = $request->input('facebook');
        $footer->instagram = $request->input('instagram');
        $footer->youtube = $request->input('youtube');

        $footer->save();

        return redirect()->back()->with('success', 'Update Successfully !');
    }

}
