<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    
   function footer(){
       $footers = Footer::all();
      return view('footer.index',compact('footers'));
   }

  function footerPost(Request $request){
      $request->validate([
         "about_addres" => 'required',
      ]);

      foreach ($request->except('_token') as $key => $value) {
        Footer::where('footer_name',$key)->update([
        'footer_value' => $value
        ]);
    }
    return response()->json('Update Successfull');


  }


}
