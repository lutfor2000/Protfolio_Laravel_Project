<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Aboutsetting;
use App\Models\Aboutphoto;
use Carbon\Carbon;
use Image;

class AboutsettingController extends Controller
{
public function __construct()
{
      $this->middleware('auth');
}

function aboutsetting(){
$aboutsettings_all = Aboutsetting::all();
$aboutphotos = Aboutphoto::all();
return view('about_setting.index',compact('aboutsettings_all','aboutphotos'));
}

function aboutsettingpost(Request $request){
foreach ($request->except('_token') as $key => $value) {
Aboutsetting::where('about_setting_name',$key)->update([
'about_setting_value' => $value
]);
}
return back()->with('about_setting_message','Update Successful !!');
}



function aboutsettingphoto(Request $request){
   $request->validate([
   'about_photo'=>'required',        
   ]);

   $random_photo_name = Str::random(10).time().".".$request->about_photo->getClientOriginalExtension();
   $about_photo = $request->file('about_photo');
   Image::make($about_photo)->resize(1000, 1194)->save(base_path('public/uploads/about_photo/').$random_photo_name);
   //Photo Insart Processing
   Aboutphoto::insert($request->except('_token','about_photo')+[
   'about_photo' =>$random_photo_name,
   'created_at' => Carbon::now(),   
   ]);
   return back();  
   
}

function aboutphotoedit($aboutphoto_id){
   $aboutphoto_infos = Aboutphoto::find($aboutphoto_id);
   return view('about_setting.aboutphotoedit',compact('aboutphoto_infos'));
}

function aboutphotoupdate(Request $request,$aboutphoto_id){
   if ($request->hasFile('new_about_photo')){
      //Delete Old Photo Start
      $old_photo_path = base_path('public/uploads/about_photo/').Aboutphoto::find($aboutphoto_id)->about_photo;
      unlink($old_photo_path);
      
      //Upload New Photo Start-------------------------------------->
      $random_photo_name = Str::random(10).time().".".$request->new_about_photo->getClientOriginalExtension();
      $about_photo = $request->file('new_about_photo');
      Image::make($about_photo)->resize(1000, 1194)->save(base_path('public/uploads/about_photo/').$random_photo_name);
      //Upload New Photo End-------------------------------------->
      Aboutphoto::find($aboutphoto_id)->update($request->except('_token','new_about_photo')+[
      'about_photo' => $random_photo_name,
      ]);
      }
      // Banner::find($banner_id)->update($request->except('_token','banner_new_photo')+[  
      // ]);
      return back()->with('about_setting_mes','Photo Update Successfull');
}

function aboutphotodelete($aboutphoto_id){
   if (Aboutphoto::where('id',$aboutphoto_id)->exists()){
      $old_photo_path = base_path('public/uploads/about_photo/').Aboutphoto::find($aboutphoto_id)->about_photo;
      unlink($old_photo_path);
      Aboutphoto::where('id',$aboutphoto_id)->forceDelete();
   }
   return back()->with('about_setting_mes','Photo Delete  Successfull !');
}



}
