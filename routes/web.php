<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BikeController;


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

//student controller 先執行的放上面
// Route::get('/student/{name}/{num}', function ($name , $num){
//     return "<h1 style='text-align:center'>Hello  ".$name."<br>"."Your number is  ".$num;
// });

Route::get('/student/{name}/{num}', [StudentController::class,'getByUrl']);

//
Route::get('/student', [StudentController::class,'index'])->name('student123');


// bike controller
Route::resource('bikes', BikeController::class);