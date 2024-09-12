<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use function Livewire\Features\SupportTesting\id;

class ServiceController extends Controller
{
    public function index(){
        $services = Services::all();
        return view('Backend.services.index', compact('services'));
    }
    public function create(){
        return view('Backend.services.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required|string|max:255',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('images' ,'public');
        }
        Services::create([
            'name'=>$request->input('name'),
            'image'=>$imagePath,
        ]);
        return redirect()->back()->with('success', 'Add Successfully !');

    }

    public function edit($id){
        $service = Services::findOrFail($id);
        return view('Backend.services.edit', compact('service'));
    }

    public function update(Request $request, $id) {
        // Find the service by ID or fail
        $service = Services::findOrFail($id);

        // Initialize image path variable
        $imagePath = $service->image; // Default to current image path

        // Check if a new image has been uploaded
        if ($request->hasFile('image')) {
            // Validate the uploaded image
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation as needed
            ]);
            // Delete the old image file if it exists
            if (file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }
            // Store the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images', $imageName, 'public');
        }

        // Update the service with new data
        $service->update([
            'name' => $request->input('name'),
            'image' => $imagePath,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Service updated successfully!');
    }

    public function destroy( $id)
    {
        // Retrieve the category by ID or fail with a 404 error
        $service = Services::findOrFail($id);
        // Check if the image file exists before attempting to delete it
        if (file_exists(public_path($service->image))) {
            unlink(public_path($service->image));
        }
        // Delete the category
        $service->delete();
        // Redirect back with a success message
        return back()->with('message', 'Service deleted successfully!');
    }


}
