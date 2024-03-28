<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DocterController;
use App\Http\Controllers\DemoController;

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

//Route::get('/home', [DemoController::class,'sayHi']);

// Route::get('/hi', [DemoController::class,'hello']);

// Route::get("/greet/{name?}", [DemoController::class,'greet']);

//  Route::post("/form", [DemoController::class,'SamplePostRequest']);

// Route::get("/form", [DemoController::class,'SampleGetRequest']);



Route::get('/',[DocterController::class,'index']);
