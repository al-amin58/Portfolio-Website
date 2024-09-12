<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('Backend.project.index', compact('projects'));
    }
    public function create(){
        return view('Backend.project.create');
    }
    public function store(Request $request){
        $request->validate([
            'project_name'=> 'required',
            'project_category'=> 'required',
            'image'=> 'required',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . '.' .$image->getClientOriginalExtension();
            $imagePath= $image->storeAs('images', $imageName, 'public');
        }
        Project::create([
            'project_name'=> $request->input('project_name'),
            'project_category'=> $request->input('project_category'),
            'image'=> $imagePath,
        ]);
        return redirect()->back()->with('success', 'Project Created Successfully ');

    }

    public function edit($id){
        $project = Project::findOrFail($id);
        return view('Backend.project.edit', compact('project'));
    }
    public function update(Request $request, $id){
        $project = Project::findOrFail($id);
        $imagePath = $project->image;
        if ($request->hasFile('image')){
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation as needed
            ]);
            if (file_exists(public_path($project->image))){
                unlink(public_path($project->image));
            }
            $image = $request->file('image');
            $imageName = time(). '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('images', $imageName, 'public');
        }
        $project->update([
            'project_name'=> $request->input('project_name'),
            'project_category'=> $request->input('project_category'),
            'image'=> $imagePath,
        ]);
        return redirect()->back()->with('success', 'Project Updated Successfully !');
    }
    public function destroy(Request $request, $id){
        $project = Project::find($id);
        if ($project){
            $project->delete();
            Session::flash('success', 'Project deleted successfully.');
        }else{
            session::flash('error', 'Project Not Deleted ..! ');
        }
        return redirect()->back();
    }
}
