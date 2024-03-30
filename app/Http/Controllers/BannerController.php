<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Banner;
use Carbon\Carbon;
use Image;

class BannerController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}

function banner(){
$banners = Banner::latest()->get();
$banner_trush_all = Banner::onlyTrashed()->get();
return view('banner.banner',compact('banners','banner_trush_all'));
}
//===============Banner Post Start==========================================================================>
function bannerpost(Request $request){
  $request->validate([
    'hello_text'=>'required',     
    'banner_title'=>'required',     
    'banner_sub_title'=>'required',     
    'banner_photo'=>'required',     
]);

$random_photo_name = Str::random(10).time().".".$request->banner_photo->getClientOriginalExtension();
$banner_photo = $request->file('banner_photo');
Image::make($banner_photo)->resize(296, 296)->save(base_path('public/uploads/banner_photo/').$random_photo_name);
//Photo Insart Processing
Banner::insert($request->except('_token','banner_photo')+[
'banner_photo' =>$random_photo_name,
'created_at' => Carbon::now(),   
]);
return back()->with('banner_success_mess','Banner Added Successfull');
}
//===============Banner Post End==========================================================================>

//===============Banner Edit Start==========================================================================>
function banneredit($banner_id){
    $banner_infos =Banner::find($banner_id);
   return view('banner.banner_edit',compact('banner_infos'));
}
//===============Banner Edit End==========================================================================>

//===============Banner Update Start==========================================================================>
function bannerupdate(Request $request,$banner_id){
if ($request->hasFile('banner_new_photo')){
//Delete Old Photo Start
$old_photo_path = base_path('public/uploads/banner_photo/').Banner::find($banner_id)->banner_photo;
unlink($old_photo_path);

//Upload New Photo Start-------------------------------------->
$random_photo_name = Str::random(10).time().".".$request->banner_new_photo->getClientOriginalExtension();
$banner_photo = $request->file('banner_new_photo');
Image::make($banner_photo)->resize(296, 296)->save(base_path('public/uploads/banner_photo/').$random_photo_name);
//Upload New Photo End-------------------------------------->
Banner::find($banner_id)->update($request->except('_token','banner_new_photo')+[
'banner_photo' => $random_photo_name,
]);
}
Banner::find($banner_id)->update($request->except('_token','banner_new_photo')+[  
]);

return redirect('banner')->with('Banner_status','banner Update Successfull');
}
//===============Banner Update End==========================================================================>

//===============Banner Delete Start==========================================================================>
function bannerdelete($banner_id){
if (Banner::where('id',$banner_id)->exists()){
    Banner::find($banner_id)->delete();
}
return back()->with('banner_status','Banner Delete Successfull');
}
//===============Banner Delete End==========================================================================>

//===============Banner Restore Start==========================================================================>
function bannerrestore($banner_id){
  Banner::onlyTrashed()->where('id',$banner_id)->restore();
  return back()->with('banner_trash_mes','Restore  Successfull !');
}
//===============Banner Restore End==========================================================================>

//===============Banner ForceDelete Start==========================================================================>
function bannerforcedelete($banner_id){

if (Banner::onlyTrashed()->where('id',$banner_id)->exists()){
$old_photo_path = base_path('public/uploads/banner_photo/').Banner::onlyTrashed()->find($banner_id)->banner_photo;
unlink($old_photo_path);
Banner::onlyTrashed()->where('id',$banner_id)->forceDelete();
}

return back()->with('banner_trash_mes','Force Delete  Successfull !');
}
//===============Banner ForceDelete End==========================================================================>

//===============Banner Post End==========================================================================>
//===============Banner Post End==========================================================================>
//===============Banner Post End==========================================================================>
//===============Banner Post End==========================================================================>
}
