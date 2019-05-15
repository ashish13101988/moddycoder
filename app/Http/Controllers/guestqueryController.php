<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guestquery;

class guestqueryController extends Controller
{
    public function query(Request $request){
        
        $this->validate($request,[
                                'name' => 'required | min:4',
                                'email'=> 'required | email',
                                'phone'=> 'required | numeric |size:10' ,
                                'subject'=>'required | max:50' ,
                                'description'=>'required | max:300'
                            ]);
         
        $data = guestquery::create($request->all());
        $data->save();
        return redirect('/')->with('status','Query Submited Successfully!');
    }
}
