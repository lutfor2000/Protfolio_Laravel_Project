<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Project;
use Carbon\Carbon;
use Image;
class ProjectController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
//===============Our Project Page View Start====================================================>
function ourproject(){
  $our_projects = Project::latest()->paginate(4);
  $project_trush_alls = Project::onlyTrashed()->get();
return view('our_project.project',compact('our_projects','project_trush_alls'));
}
//===============Our Project Page View End====================================================>

//===============Our Project Post Start====================================================>
function projectpost(Request $request){
  $request->validate([
    'project_title_one'=>'required',     
    'project_sub_title_one'=>'required',     
    'project_desc_one'=>'required',     
    'project_photo_one'=>'required',     
    'project_title_two'=>'required',     
    'project_sub_title_two'=>'required',     
    'project_desc_two'=>'required',     
    'project_photo_two'=>'required',     
]);
//Photo Uploat One
  $random_photo_name_one = Str::random(10).time().".".$request->project_photo_one->getClientOriginalExtension();
  $project_photo_one = $request->file('project_photo_one');
  Image::make($project_photo_one)->resize(1000, 1580)->save(base_path('public/uploads/project_photo/').$random_photo_name_one);
//Photo Two File Upload  
  $random_photo_name_two = Str::random(10).time().".".$request->project_photo_two->getClientOriginalExtension();
  $project_photo_two = $request->file('project_photo_two');
  Image::make($project_photo_two)->resize(1000, 667)->save(base_path('public/uploads/project_photo/').$random_photo_name_two);
//Data Insert-------->
  Project::insert($request->except('_token','project_photo_one','project_photo_two')+[
    'project_photo_one' =>$random_photo_name_one,
    'project_photo_two' =>$random_photo_name_two,
    'created_at' => Carbon::now(),  
  ]);
  return back()->with('project_add_mess',' Added Successfull');

}
 //===============Our Project Post End====================================================>

 //===============Our Project Page Edit Start====================================================>
 function projectedite($project_id){
  $project_info = Project::find($project_id);
 return view('our_project.project_edit',compact('project_info'));
 }
 //===============Our Project Page Edit End====================================================>

 //===============Our Project Page Update Start====================================================>
 function projectupdate(Request $request,$project_id){

  if ($request->hasFile('project_new_photo_one')){
    //Delete Old Photo Start
    $old_photo_path_on = base_path('public/uploads/project_photo/').Project::find($project_id)->project_photo_one;
    unlink($old_photo_path_on);
    
    //Upload New Photo Start-------------------------------------->
    $random_photo_name = Str::random(10).time().".".$request->project_new_photo_one->getClientOriginalExtension();
    $project_photo_one = $request->file('project_new_photo_one');
    Image::make($project_photo_one)->resize(1000, 1580)->save(base_path('public/uploads/project_photo/').$random_photo_name);
    //Upload New Photo End-------------------------------------->
    Project::find($project_id)->update($request->except('_token','project_new_photo_one','project_new_photo_two')+[
    'project_photo_one' => $random_photo_name,
    ]);
    }

  if ($request->hasFile('project_new_photo_two')){
    //Delete Old Photo Start
    $old_photo_path_two = base_path('public/uploads/project_photo/').Project::find($project_id)->project_photo_two;
    unlink($old_photo_path_two);
    
    //Upload New Photo Start-------------------------------------->
    $random_photo_name = Str::random(10).time().".".$request->project_new_photo_two->getClientOriginalExtension();
    $project_photo_two = $request->file('project_new_photo_two');
    Image::make($project_photo_two)->resize(1000, 667)->save(base_path('public/uploads/project_photo/').$random_photo_name);
    //Upload New Photo End-------------------------------------->
    Project::find($project_id)->update($request->except('_token','project_new_photo_two','project_new_photo_one')+[
    'project_photo_two' => $random_photo_name,
    ]);
    }
    Project::find($project_id)->update($request->except('_token','project_new_photo_one','project_new_photo_two')+[  
    ]);

    return back()->with('our_project_status','Update Successfull');
 }
 //===============Our Project Page Update End====================================================>

//===============Our Project delete Start====================================================>
function projectdelete($project_id){
if (Project::where('id',$project_id)->exists()){
Project::find($project_id)->delete();  
}
return back()->with('our_project_message',' Delete Successfull !');  
}
//===============Our Project delete End====================================================>

//===============Our Project Restore Start====================================================>
function projectrestore($project_id){
Project::onlyTrashed()->where('id',$project_id)->restore();
return back()->with('project_trash_mes','Restore  Successfull !');
}
//===============Our Project Restore End====================================================>

//===============Our Project Force Delete Start====================================================>
function projectforcedelete($project_id){
  if (Project::onlyTrashed()->where('id',$project_id)->exists()){
    $old_photo_path_one = base_path('public/uploads/project_photo/').Project::onlyTrashed()->find($project_id)->project_photo_one;
    unlink($old_photo_path_one);

    $old_photo_path_two = base_path('public/uploads/project_photo/').Project::onlyTrashed()->find($project_id)->project_photo_two;
    unlink($old_photo_path_two);
    Project::onlyTrashed()->where('id',$project_id)->forceDelete();
  }
    
  return back()->with('project_trash_mes','Force Delete  Successfull !');
}
 //===============Our Project Force Delete End====================================================>

 

 //===============Our Project Page View Start====================================================>
 //===============Our Project Page View End====================================================>
    

}
