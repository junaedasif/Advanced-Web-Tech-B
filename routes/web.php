<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

// Route::get('/',function(){
//     return view('HomePage');
// });
// Route::get('/about',function(){
//     return view('AboutPage');
// });
// Route::get('/contact',function(){
//     return view('ContactPage');
// });

// Route from Controller
Route::get('/',[SiteController::Class,'Home']);
Route::get('/about',[SiteController::Class,'About']);
Route::get('/contact',[SiteController::Class,'Contact']);
// Route::get('/login',[SiteController::Class,'Login']);
Route::get('/login',[PagesController::Class,'Login']);
Route::get('/register',[PagesController::Class,'Register']);
// Route::get('/login',function(){
//     return view('login');
// });
Route::get('/student/create',[StudentController::Class,'create']);
Route::get('/student/get',[StudentController::Class,'get']);
Route::get('/student/list',[StudentController::Class,'list']);

Route::get('/student/details/{id}/{name}',[StudentController::Class,'details']);