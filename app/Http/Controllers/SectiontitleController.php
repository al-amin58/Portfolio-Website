<?php

namespace App\Http\Controllers;

use App\Models\Sectiontitle;
use Illuminate\Http\Request;
use function Livewire\Features\SupportTesting\id;

class SectiontitleController extends Controller
{
    public function index(){
        $section =  Sectiontitle::first();
        return view('Backend.section-name', compact('section'));
    }

    public function update(Request $request){

        $request->validate([
            'resume_title' => 'nullable|string|max:255',
            'resume_description' => 'nullable|string|max:255',
            'services_title' => 'nullable|string|max:255',
            'services_description' => 'nullable|string|max:255',
            'Skills_title' => 'nullable|string|max:255',
            'skills_description' => 'nullable|string|max:255',
            'projects_title' => 'nullable|string|max:255',
            'projects_description' => 'nullable|string|max:255',
        ]);

        $section = Sectiontitle::first();

        if (!$section){
            $section = new Sectiontitle();
        }
        $section->resume_title = $request->input('resume_title');
        $section->resume_description = $request->input('resume_description');
        $section->services_title = $request->input('services_title');
        $section->services_description = $request->input('services_description');
        $section->Skills_title = $request->input('Skills_title');
        $section->skills_description = $request->input('skills_description');
        $section->projects_title = $request->input('projects_title');
        $section->projects_description = $request->input('projects_description');
        $section->save();

        return redirect()->back()->with('success', 'All Title Update Successfully !');

    }
}
