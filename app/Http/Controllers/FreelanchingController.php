<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Freelanching;
use Carbon\Carbon;
use Image;

class FreelanchingController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}
//=========Freelanching Page View Start============================================================>
function freelanching(){
    $freelancings = Freelanching::latest()->get();
    return view('freelanching.index',compact('freelancings'));
}
//=========Freelancing Page View End============================================================>

//=========Freelanching Page Insert Start============================================================>
function freelancingpost(Request $request){
    $request->validate([
        'fre_title_one'=>'required',     
        'fre_title_two'=>'required',     
        'fre_title_three'=>'required',     
        'fre_description'=>'required',     
        'fre_photo'=>'required',     
    ]);

    $random_photo_name = Str::random(10).time().".".$request->fre_photo->getClientOriginalExtension();
    $fre_photo = $request->file('fre_photo');
    Image::make($fre_photo)->resize(2000, 1155)->save(base_path('public/uploads/free_photo/').$random_photo_name);

    
    Freelanching::insert($request->except('_token','fre_photo')+[
        'fre_photo' =>$random_photo_name,
        'created_at' => Carbon::now(),
    ]);

    return back()->with('freelencing_mess','Item Added Successfull');
}
//=========Freelanching Page Insert End============================================================>

//=========Freelancing Page Item Delete Start============================================================>
function freelancingdelete($free_id){

    if (Freelanching::where('id',$free_id)->exists()){
        $old_photo_path = base_path('public/uploads/free_photo/').Freelanching::find($free_id)->fre_photo;
        unlink($old_photo_path);
        Freelanching::find($free_id)->delete();
    }
        
        return back()->with('freelencing_mess',' Delete  Successfull !');
}
//=========Freelancing Page Item Delete End============================================================>

//=========Freelancing Page Edit Start============================================================>
function freelancingedit($free_id){
    $free_info = Freelanching::find($free_id);
    return view('freelanching.edit',compact('free_info'));
}
//=========Freelancing Page Edit End============================================================>

//=========Freelancing Page Update Start============================================================>
function freelancingupdate(Request $request,$free_id){
    if ($request->hasFile('fre_new_photo')){
        //Delete Old Photo Start
        $old_photo_path = base_path('public/uploads/free_photo/').Freelanching::find($free_id)->fre_photo;
        unlink($old_photo_path);
        
        //Upload New Photo Start-------------------------------------->
        $random_photo_name = Str::random(10).time().".".$request->fre_new_photo->getClientOriginalExtension();
        $fre_photo = $request->file('fre_new_photo');
        Image::make($fre_photo)->resize(2000, 1155)->save(base_path('public/uploads/free_photo/').$random_photo_name);
        //Upload New Photo End-------------------------------------->
        Freelanching::find($free_id)->update($request->except('_token','fre_new_photo')+[
        'fre_photo' => $random_photo_name,
        ]);
        }
        Freelanching::find($free_id)->update($request->except('_token','fre_new_photo'));
        return redirect('freelanching')->with('freelencing_mess',' Update Successfull');
}
//=========Freelancing Page Update End============================================================>

//=========Freelancing Page View Start============================================================>
//=========Freelancing Page View End============================================================>
}
