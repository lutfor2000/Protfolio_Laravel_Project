<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;
use Carbon\Carbon;

class CounterController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}
//=========Counter Page View Start============================================================>
function counter(){
    $counters = Counter::latest()->paginate(4);
    return view('counter.index',compact('counters'));
}
//=========Counter Page View End============================================================>

//=========Counter Page Data Insert Start============================================================>
function counterpost(Request $request){
    $request->validate([
        'counter_name'=>'required',     
        'counter_number'=>'required',       
    ]);
    
    Counter::insert($request->except('_token')+[
        'created_at' => Carbon::now(),
    ]);
  
    return back()->with('count_add_mess',' Added Successfull');    
}
//=========Counter Page Data Insert End============================================================>

//=========Counter Page edite Start============================================================>
function countedit($counter_id){
    $counter_info = Counter::find($counter_id);
    return view('counter.edit',compact('counter_info'));
}
//=========Counter Page edite End============================================================>

//=========Counter Page Item Update  Start============================================================>
function counterupdate(Request $request,$counter_id){
     Counter::find($counter_id)->update($request->except('_token'));
     return redirect('counter')->with('counter_mess',' Update Successfull');

}
//=========Counter Page Item Update  End============================================================>

//=========Counter Page Item Delete Start============================================================>
function counterdelete($counter_id){
    if (Counter::where('id',$counter_id)->exists()){
        Counter::find($counter_id)->delete();
    }
    return back()->with('counter_mess',' Delete Successfull !!!');
}
//=========Counter Page Item Delete End============================================================>

//=========Counter Page View Start============================================================>
//=========Counter Page View End============================================================>
}
