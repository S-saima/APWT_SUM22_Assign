<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class UsersController extends Controller
{
    //
    public function details($id){
        $id="customer $id";
        $dob ="4456";
        return view('user.details')
        ->with('id',$id)
        ->with('name',$name);
        
        
    }
    public function list(){
        $custo = customer::all();
        return view('user.list')->with('customers',$custo);    

    }
    function create(){
        return view('user.create');
    }

    function createSubmit(Request $req){
        $this->validate($req,
        [
                
            "name"=>"required|regex:/^[a-zA-Z .-]+$/i",
            "email"=>"required",
            "password"=>"required|min:8|regex:/^[a-zA-Z0-9@#$!&]+$/i",
            "conf_password"=>"required|same:password"
            

        ],

        
    
        [
            "name.regex"=>"Name is alphabetic",
            "password.min"=>"Minimum 8 characters",
            "password.min"=>"Must be upper case lower case special character",
            
            

            
        ]);

        $st = new customer();
        $st->name = $req->name;
        $st->email =$req->email;
        $st->password = $req->password;
        $st->save();


            return redirect()->route("home");
        
    }

    function login(){
        return view('user.login');
    }

    function loginSubmit(Request $req){
        $this->validate($req,
        [
                
            
            "email_log"=>"required",
            "password_log"=>"required|min:8",
            

        ],
        [
            
            "email_log.required"=>"Name is alphabetic",
            "password.min"=>"Minimum 8 characters",
        ]);

        $cus= customer::where('email','=',$req->email)

 ->where('password','=',$req->password)->first();

       if($cus){
            return redirect()->route("user.list");
       }
       else
       return redirect()->route("home");
            
    }
}
