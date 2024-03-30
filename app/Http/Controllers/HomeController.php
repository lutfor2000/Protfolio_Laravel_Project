<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Image;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('home',compact('users'));
    }

    public function profile($user_id)
    {
        $profile_info = User::find($user_id);
        return view('profile',compact('profile_info'));
    }
//=================Profile Photo Upload Start===========================================================>
public function profileupdate(Request $request ,$user_id)
{
$request->validate([
'user_photo'=>'required', 
]);

if (User::find($user_id)->user_photo != "default.jpg"){
$old_photo_path = base_path('public/uploads/profile_photo/').User::find($user_id)->user_photo;
unlink($old_photo_path);

$random_photo_name = Str::random(10).time().".".$request->user_photo->getClientOriginalExtension();
$user_photo = $request->file('user_photo');
Image::make($user_photo)->resize(350, 350)->save(base_path('public/uploads/profile_photo/').$random_photo_name);

User::find($user_id)->update($request->except('_token','user_photo')+[
'user_photo' => $random_photo_name,
]);

}else{

$random_photo_name = Str::random(10).time().".".$request->user_photo->getClientOriginalExtension();
$user_photo = $request->file('user_photo');
Image::make($user_photo)->resize(350, 350)->save(base_path('public/uploads/profile_photo/').$random_photo_name);

User::find($user_id)->update($request->except('_token','user_photo')+[
'user_photo' => $random_photo_name,
]);
}
return back()->with('profile_photo_update','Profile Photo Update Successfull');
}
//=================Profile Photo Upload End===========================================================>




}
