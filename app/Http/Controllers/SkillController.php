<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use Carbon\Carbon;

class SkillController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}

function skill(){
$skills = Skill::latest()->paginate(5);
$skill_trushs = Skill::onlyTrashed()->get();
return view('skill.skill_index',compact('skills','skill_trushs'));
}

function skillepost(Request $request){
$request->validate([
    'skill_title' => 'required',
    'skill_parsent' => 'required',
]);
Skill::insert($request->except('_token')+[
    'created_at' => Carbon::now()
]);
return back()->with('skill_add_mess',' Item Add Successfull');
}

function skilledite($skill_id){
$skill_info = Skill::find($skill_id);
return view('skill.skill_edit',compact('skill_info'));
}

function skillupdate(Request $request ,$skill_id){
Skill::find($skill_id)->update($request->except('_token'));
return redirect('skill')->with('skill_message',' Update Successfull');
}

function skilldelete($skill_id){
 if (Skill::where('id',$skill_id)->exists()) {
    Skill::find($skill_id)->delete();
 }
return back()->with('skill_message','Delete Successful !');
}

function skillrestore($skill_id){
    Skill::onlyTrashed()->where('id',$skill_id)->restore();
    return back()->with('skill_trashed_message','Restore Successful !');
}

function skillforcedelete($skill_id){
  skill::onlyTrashed()->where('id',$skill_id)->forceDelete();
  return back()->with('skill_trashed_message','Force Delete Successful !');
}

}
