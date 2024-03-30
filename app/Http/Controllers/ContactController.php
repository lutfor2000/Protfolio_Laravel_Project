<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}
function contact(){
    $contacts = Contact::all();
    return view('contact.contact',compact('contacts'));
}

function contactgpost(Request $request){
    foreach ($request->except('_token') as $key => $value) {
        Contact::where('contact_name',$key)->update([
        'contact_value' => $value
        ]);
    }
    return back()->with('contact_message','Update Successful !!');
}

}
