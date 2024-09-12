<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Conract;
use App\Models\Footer;
use App\Models\Hero;
use App\Models\Hire;
use App\Models\Project;
use App\Models\Resume;
use App\Models\Sectiontitle;
use App\Models\Services;
use App\Models\Skill;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $hero = Hero::first();
        $about = About::first();
        $sectionTitle = Sectiontitle::first();
        $resumes = Resume::all();
        $services = Services::all();
        $skills = Skill::all();
        $projects = Project::all();
        $hire = Hire::first();
        $contact = Conract::first();
        $footer = Footer::first();


//        dd($hero);
        return view('frontend.index', compact('hero', 'about', 'sectionTitle','resumes','services','skills',"projects" ,'hire','contact','footer'));
    }
}
