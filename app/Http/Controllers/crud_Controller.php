<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Models\employees;
use Carbon\Carbon;
use Image;

class crud_Controller extends Controller
{
    function index(){

        return view('upload');
    }

    function create(Request $req){
        
        
        
        $image_name = $req->logo;
        $extension = $image_name->getClientOriginalExtension();
        $new_name = $req->name.'.'.$extension;
        
        Image::make($image_name)->resize(100,100)->save(base_path('public/logos/'.$new_name));
        // $image_name->storeAs('/',$new_name,'uploads');
        // $image_save = new Image;
        // $image_save->name = $new_name;
        // $image_save->save();
        // echo $new_name; 
        
       
        companies::insert([
            'name' => $req->name,
            'email' => $req->email,
            'logo' => $new_name,
            'website' => $req->website,
            'created_at' => Carbon::now(), 
        ]);

        employees::create([
            'first_name' => 'john',
            'last_name' => 'doe',
            'company' => 'xyz',
            'email' => 'test@gmail.com',
            'phone' => '01773427323',
            'created_at' => Carbon::now(), 
        ]);
        echo "created successfully";
    }

    function company_data_read(){
        echo "company data";
        $all_data = companies::all();
        return $all_data;
    }

    function employee_data_read(){
        echo "employee data";
        $all_data = employees::all();
        return $all_data;
    }


    function update(){
        employees::where('id','2')->update([
            'first_name' => 'test',
            'last_name' => 'william',
        ]);


        companies::where('id','1')->update([
            'name' => 'test',
            'email' => 'update@gmail.com',
        ]);

        echo "updated successfully";
    }

    function delete(){
        employees::where('id','2')->delete();
        companies::where('id','1')->delete();
    }
}
