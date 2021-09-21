<?php

use App\Http\Controllers\About;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UserWeight;
use App\Models\User;

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

// This is a view for the weight page
Route::get('/weight', function () {
    return view('weight');
});

// create a dynimic view with a dynimic input from the user. this will be linked to user page with $name
// Route::get("/user/{name}", function ($name) {
//     return view("users",['name'=>$name]);
// });

// create a route for UserWeight
Route::get("weight", [UserWeight::class,'loadview']);

// using componet 
Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

