<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Models\test_user;

class generalController extends Controller
{
    function show_pagination(){
        $data = companies::simplePaginate(10);

        return view('show',[
            'data' => $data,
        ]);
    }

    function registration(Request $req){
        $req->validate([
            'name' =>'required',
            'email' => 'required',
            'role' =>'required',
            'password' =>'required',
        ]);
        test_user::insert([
            'name' => $req->name,
            'email' => $req->email,
            'role' => $req->role,
            'password' => $req->password,
        ]);

        echo "registration successfull";
    }

    function login(Request $req){
        
        if(test_user::where('email',$req->email)->where('role',$req->role)->where('password',$req->password)->exists()){
            echo "welcome";
        }

    }
}
