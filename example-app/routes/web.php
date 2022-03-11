<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

// Route::view('home','home')->middleware('protectedPage');
// Route::view('users','users')->middleware('protectedPage');
// Route::view('noaccess','noaccess');
// Route::view('login','login');
// Route::view('profile','profile');
// Route::get('/logout',function(){
//     if(session()->has('user'))
//     {
//         session()->pull('user',null);
//     }
//     return redirect('login');
// }); 
// Route::get('/login',function(){
//     if(session()->has('user'))
//     {
//         return redirect('profile');
//     }
//     return view('login');
// });  
// Route::post("user",[PostsController::class,'userLogin']);
// Route::view('store','login');
// Route::post('PostsController',[PostsController::class,'storeM']);



// Route::view('upload','upload');
// Route::post('upload',[PostsController::class,'index']);


// Route::view("user","profiles");

// Route::view('post','addmemeber');
// Route::get('add',[PostsController::class,'addData']);

// Route::get('list',[PostsController::class,'show']);
// Route::get('delete/{id}',[PostsController::class,'delete']);
// Route::get('edit/{id}',[PostsController::class,'edit']);
// Route::get('edit',[PostsController::class,'update']);

// Route::get('post',[PostsController::class,'dboperation']);
Route::get('post',[PostsController::class,'index']);



//controller name is plular