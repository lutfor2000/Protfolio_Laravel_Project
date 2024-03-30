<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
use Carbon\Carbon;
use Image,Auth;
class BlogController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}
//=========Blog Page View Start============================================================>
function blog(){
    $our_blogs = Blog::latest()->paginate(5);
    $blog_trushs =  Blog::onlyTrashed()->get();
    return view('our_blog.blog',compact('our_blogs','blog_trushs'));
}
//=========Blog Page View End============================================================>

//=========Blog Page Post View Start============================================================>
function blogpost(Request $request){
    $request->validate([
        'blog_date'=>'required',     
        'blog_title'=>'required',     
        'blog_description'=>'required',     
        'blog_photo'=>'required',     
    ]);

    $random_photo_name = Str::random(10).time().".".$request->blog_photo->getClientOriginalExtension();
    $blog_photo = $request->file('blog_photo');
    Image::make($blog_photo)->resize(1000, 667)->save(base_path('public/uploads/blog_photo/').$random_photo_name);

    Blog::insert($request->except('_token','blog_photo')+[
        'user_id' =>Auth::id(),
        'blog_photo' =>$random_photo_name,
        'created_at' => Carbon::now(),
    ]);

    return back()->with('blog_add_mess','Item Added Successfull');
}
//=========Blog Page Post View End============================================================>

//=========Blog Page Edit Start============================================================>
function blogedit($blog_id){
    $blog_info = Blog::find($blog_id);
return view('our_blog.blog_edit',compact('blog_info'));
}
//=========Blog Page Edit End============================================================>

//=========Blog Page Item Update Start============================================================>
function blogupdate(Request $request,$blog_id){
    if ($request->hasFile('blog_new_photo')){
        //Delete Old Photo Start
        $old_photo_path = base_path('public/uploads/blog_photo/').Blog::find($blog_id)->blog_photo;
        unlink($old_photo_path);
        
        //Upload New Photo Start-------------------------------------->
        $random_photo_name = Str::random(10).time().".".$request->blog_new_photo->getClientOriginalExtension();
        $blog_photo = $request->file('blog_new_photo');
        Image::make($blog_photo)->resize(1000, 667)->save(base_path('public/uploads/blog_photo/').$random_photo_name);
        //Upload New Photo End-------------------------------------->
        Blog::find($blog_id)->update($request->except('_token','blog_new_photo')+[
        'blog_photo' => $random_photo_name,
        ]);
        }
        Blog::find($blog_id)->update($request->except('_token','blog_new_photo'));
        
        return back()->with('blog_status',' Update Successfull');
}
//=========Blog Page Item Update End============================================================>

//=========Blog Page Item delete Start============================================================>
function blogdelete($blog_id){
    if (Blog::where('id',$blog_id)->exists()) {
        Blog::find($blog_id)->delete();
    } 
    return back()->with('blog_messs',' Delete Successfull');  
}
//=========Blog Page Item delete End============================================================>

//=========Blog Page Item Restore Start============================================================>
function blogrestore($blog_id){
        Blog::onlyTrashed()->where('id',$blog_id)->restore();
        return back()->with('blog_trash_mes','Restore  Successfull !');
}
//=========Blog Page Item Restore End============================================================>

//=========Blog Page Item Force Delete Start============================================================>
function blogforcedelete($blog_id){
    if (Blog::onlyTrashed()->where('id',$blog_id)->exists()){
        $old_photo_path = base_path('public/uploads/blog_photo/').Blog::onlyTrashed()->find($blog_id)->blog_photo;
        unlink($old_photo_path);
        Blog::onlyTrashed()->where('id',$blog_id)->forceDelete();
    }
        
        return back()->with('blog_trash_mes','Force Delete  Successfull !');
}
//=========Blog Page Item Force Delete End============================================================>



//=========Blog Page View Start============================================================>
//=========Blog Page View End============================================================>
}
