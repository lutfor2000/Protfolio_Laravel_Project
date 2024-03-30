<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientmessage;
use Carbon\Carbon;
class ClientmessageController extends Controller
{

public function __construct()
{
    $this->middleware('auth');
}

function clientmessage(){
     $clientmessages = Clientmessage::latest()->get();
     $clientmessages_trush_alls = Clientmessage::onlyTrashed()->get();
     return view('clientmessage.index',compact('clientmessages','clientmessages_trush_alls'));
}

function clientmessagepost(Request $request){
     $request->validate([
        'client_name' => 'required',
        'client_email' => 'required',
        'client_subject' => 'required',
        'client_message' => 'required',
     ]);
     
     Clientmessage::insert($request->except('_token')+[
        'created_at' => Carbon::now()
     ]);
     
     return back()->with('clientmessage_mess','Message Send Successfull');
}

//==================Delete All Processing Start==============================>
function clientmessagedelete($client_id){
    if(Clientmessage::where('id',$client_id)->exists()){
        Clientmessage::find($client_id)->delete();
    }
    return back()->with('clientmessage_status','Delete  Successfull !');
}
//==================Delete All Processing Start==============================>

//==================Restore Processing Start==============================>
function clientmessagerestore($client_id){
    Clientmessage::onlyTrashed()->where('id',$client_id)->restore();
    return back()->with('restore_trash_mes','Restore  Successfull !');
}
//==================Restore All Processing Start==============================>

//==================Delete All Processing Start==============================>
function clientdeleteall(){
   Clientmessage::whereNull("deleted_at")->delete();
   return  back()->with('clientmessage_status','All Delete Successfull');
}
//==================Delete All Processing End==============================>

//==================Force Delete All Processing Start==============================>
function clientallforcedelete(){
    Clientmessage::onlyTrashed('deleted_at')->forceDelete();
    return  back()->with('restore_trash_mes','All Trash Delete  Successfull !');
}
//==================Force Delete All Processing End==============================>

}
