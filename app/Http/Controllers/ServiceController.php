<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Carbon\Carbon;

class ServiceController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}
//=============Service Page View Start==============================================================>
function service(){
$services = Service::latest()->paginate(3);
$service_trush_all = Service::onlyTrashed()->paginate(3);
return view('service.index',compact('services','service_trush_all'));
}
//=============Service Page View End==============================================================>

//=============Service Page Data Insert Start==============================================================>
function servicepost(Request $request){
$request->validate([
'service_icon' => 'required',
'service_title' => 'required',
'service_description' => 'required',
]);

Service::insert($request->except('_token')+[
    'created_at' => Carbon::now()
]);
return back()->with('service_success_mess',' Item Add Successfull');
}
//=============Service Page Data Insert End==============================================================>

//=============Service Page Edit Start==============================================================>
function servicedit($service_id){
$service_view = Service::find($service_id);
return view('service.edit',compact('service_view'));   
}
//=============Service Page Edit End==============================================================>

//=============Service Page Update Start==============================================================>
function serviceupdate(Request $request ,$service_id){
$request->validate([
'service_icon' => 'required',
'service_title' => 'required',
'service_description' => 'required',
]);

Service::find($service_id)->update($request->except('_token'));
return redirect('service')->with('service_message',' Update Successfull');

}
//=============Service Page Update End==============================================================>

//=============Service Item Delete Start==============================================================>
function servicedelete($service_id){
if (Service::where('id',$service_id)->exists()) {
    Service::find($service_id)->delete();
}
return back()->with('service_message',' Delete Successfull');
}
//=============Service Item Delete End==============================================================>

//=============Service Item Retore Start==============================================================>
function servicestore($service_id){
    Service::onlyTrashed()->where('id',$service_id)->restore();
    return back()->with('service_trush_messege',' Retore Successfull');
}
//=============Service Item Retore End==============================================================>

//=============Service Item ForceDelete Start==============================================================>
function serviceforcedelete($service_id){
    Service::onlyTrashed()->where('id',$service_id)->forceDelete();
    return back()->with('service_trush_messege',' Force Delete Successfull');
}
//=============Service Item ForceDelete End==============================================================>


//=============Service Page View Start==============================================================>
//=============Service Page View End==============================================================>

//=============Service Page View Start==============================================================>
//=============Service Page View End==============================================================>




}
