<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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
