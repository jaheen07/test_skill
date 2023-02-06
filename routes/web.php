<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crud_Controller;
use App\Http\Controllers\generalController;
use App\Http\Controllers\resourceController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//authentication
Route::view('/reg','reg');
Route::post('/registration',[generalController::class,'registration']);
Route::view('/login','login');
Route::post('/login_check',[generalController::class,'login']);


//CRUD operations
Route::get('/create',[crud_Controller::class,'index']);
Route::post('/create_data',[crud_Controller::class,'create']);
Route::get('/company',[crud_Controller::class,'company_data_read']);
Route::get('/employee',[crud_Controller::class,'employee_data_read']);
Route::get('/update',[crud_Controller::class,'update']);
Route::get('/delete',[crud_Controller::class,'delete']);


//for paginations
Route::get('show_pagination',[generalController::class,'show_pagination']);


Route::resource('/links', resourceController::class);



