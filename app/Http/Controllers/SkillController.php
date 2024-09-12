<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class SkillController extends Controller
{
   public function index(){
       $skills = Skill::all();
       return view('Backend.skill.index', compact('skills'));
   }

    public  function  create(){
        return view('Backend.skill.create');
    }

   public function store(Request $request){
       $request->validate([
           'skill_name'=>'required',
           'percentage'=>'required',
       ]);
       Skill::create([
           'skill_name'=> $request->input('skill_name'),
           'percentage'=>$request->input('percentage'),
       ]);
       return redirect()->back()->with('success', 'Skill Created Successfully !');
   }
   public function edit($id){
       $skill = Skill::find($id);
       return view('Backend.skill.edit', compact('skill'));
   }

   public function update(Request $request, $id){
       $skill = Skill::findOrFail($id);
       $skill->update([
           'skill_name'=> $request->input('skill_name'),
           'percentage'=>$request->input('percentage'),
       ]);
       return redirect()->back()->with('success', 'Skill Updated Successfully !');

   }
   public function destroy(Request $request, $id){
       $skill = Skill::find($id);
       if ($skill){
           $skill->delete();
           Session::flash('success', 'Skill deleted successfully.');
       }else{
           session::flash('error', 'Skill Not Deleted ..! ');
       }
       return redirect()->back();
   }

}
