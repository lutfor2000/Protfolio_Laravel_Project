<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;
use Carbon\Carbon;

class ResumeController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}
//==================Resume Page View Start=========================================================================>
function resume(){
    $resumes = Resume::latest()->paginate(3);
    $resume_trush_all = Resume::onlyTrashed()->get();
    return view('resume.resume',compact('resumes','resume_trush_all'));
}
//==================Resume Page View End=========================================================================>
//==================Resume Data Insert Start=========================================================================>
function resumepost(Request $request){
   $request->validate([
    'resume_date'=>'required',     
    'resume_degree'=>'required',     
    'resume_univarsity'=>'required',     
    'resume_descrtiption'=>'required',  
    ]);
    Resume::insert($request->except('_token')+[
    'created_at' => Carbon::now()
    ]);
   return back()->with('resume_success_mess','Added Successfull');
}
//==================Resume Data Insert End=========================================================================>

//==================Resume Page Edit Start=========================================================================>
function resumedite($resume_id){
   $resumes = Resume::find($resume_id);
   return view('resume.resume_edit',compact('resumes'));
}
//==================Resume Page Edit End=========================================================================>

//==================Resume Page Update Start=========================================================================>
function resumeupdate(Request $request ,$resume_id){
    $request->validate([
        'resume_date'=>'required',     
        'resume_degree'=>'required',     
        'resume_univarsity'=>'required',     
        'resume_descrtiption'=>'required',  
        ]);
    Resume::find($resume_id)->update($request->except(['_token']));
    return redirect('resume')->with('resume_success',' Update Successfull');
}
//==================Resume Page Update End=========================================================================>

//==================Resume Page Edit Start=========================================================================>
function resumedelete($resume_id){
    if (Resume::where('id',$resume_id)->exists()) {
        Resume::find($resume_id)->delete();
    }
    return back()->with('resume_success',' Delete Successfull');
 }
 //==================Resume Page Edit End=========================================================================>
 
 //==================Resume Page Restore Start=========================================================================>
 function resumerestore($resume_id){
    Resume::onlyTrashed()->where('id',$resume_id)->restore();
     return back()->with('resume_trush_messege',' Retore Successfull');
  }
  //==================Resume Page Restore End=========================================================================>
  
}
