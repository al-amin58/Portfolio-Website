<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ResumeController extends Controller
{
    public function index(){
        return view('Backend.resume.index', [
            'resumes' => Resume::all()
        ]);
    }
    public  function  create(){
        return view('Backend.resume.create');
    }
    public function store(Request $request){
        $request->validate([
            'course_name' => 'required',
            'institute_name' => 'required',
            'description' => 'required',
            'first_year' => 'required',
            'final_year' => 'nullable'
        ]);
        Resume::create([
            'course_name'=> $request->input('course_name'),
            'institute_name'=> $request->input('institute_name'),
            'description'=> $request->input('description'),
            'first_year'=> $request->input('first_year'),
            'final_year'=> $request->input('final_year'),
        ]);
        return redirect()->route('resume.create')->with('success', 'Resume stored successfully!');
    }
    public function edit($id){
        $resume = Resume::findOrFail($id);
        return view('Backend.resume.edit', compact('resume'));
    }
    public function update(Request $request, $id){
        $resume = Resume::findOrFail($id);
        $resume->update([
            'course_name'=> $request->input('course_name'),
            'institute_name'=> $request->input('institute_name'),
            'description'=> $request->input('description'),
            'first_year'=> $request->input('first_year'),
            'final_year'=> $request->input('final_year'),
        ]);
        return redirect()->route('resume.index')->with('success', 'Resume stored successfully!');
    }

    public function destroy($id){
        // Find the product by ID
        $resume = Resume::find($id);
        // Check if the product exists
        if ($resume) {
            // Delete the product
            $resume->delete();
            // Optionally, add a success message
            Session::flash('success', 'Resume deleted successfully.');
        } else {
            // Optionally, add an error message
            Session::flash('error', 'Resume not found.');
        }

        // Redirect to a specific route or page
        return Redirect::route('resume.index');
    }

}
