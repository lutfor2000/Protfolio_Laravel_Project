<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelanching;
use App\Models\Banner;
use App\Models\Aboutsetting;
use App\Models\Aboutphoto;
use App\Models\Setting;
use App\Models\Resume;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Blog;
use App\Models\User;
use App\Models\Counter;
use App\Models\Contact;


class FrontendController extends Controller{
   
//=====================Banner Page View Part Start=====================================================================================>
function codeblaze(){
$counters = Counter::latest()->limit(4)->get();
$freelencings = Freelanching::latest()->limit(1)->get();
$resumes = Resume::latest()->get();
$our_projects = Project::latest()->get();
$our_blogs = Blog::latest()->get();
$skills = Skill::latest()->get();
$serveces = Service::latest()->get();
$aboutsettings_all = Aboutsetting::all();
$contacts = Contact::all();
$banners = Banner::latest()->get(); 
$aboutphotos = Aboutphoto::latest()->limit(1)->get(); 
$settings = Setting::all();

// $users = User::all();
return view('index',compact('banners','aboutsettings_all','aboutphotos','settings','resumes',
'serveces','skills','our_projects','our_blogs','counters','freelencings','contacts'));
}
//=====================Banner Page View Part End=====================================================================================>

//=============Service Page Details Start==============================================================>
function servicedetails($service_id){
$service_details_info = Service::find($service_id);
return view('service.service_details',compact('service_details_info'));
}
//=============Service Page Details End==============================================================>

//===============Our Project Page Details Start====================================================>
function projectdetails($project_id){
   $project_details = Project::find($project_id);
return view('our_project.project_details',compact('project_details'));
}
//===============Our Project Page Details End====================================================>

//=========Blog Page Details View Start============================================================>
function blogdetails($blog_id){
$blogs = Blog::find($blog_id);
return view('our_blog.blog_details',compact('blogs'));
}
//=========Blog Page Details View End============================================================>

function about(){
   return view('about');
}


}
