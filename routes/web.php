<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use App\Http\Controllers\WF1_controller;
use App\Http\Controllers\WF2_controller;
use App\Http\Controllers\WF3_controller;
use App\Http\Controllers\WF5_controller;
use App\Http\Controllers\WF6_controller;
use App\Http\Controllers\WF7_controller;
use App\Http\Controllers\WF8_controller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|   Route::get($uri, $callback);
|   Route::post($uri, $callback);
|   Route::put($uri, $callback);
|   Route::patch($uri, $callback);
|   Route::delete($uri, $callback);
|   Route::options($uri, $callback);
|
*/

//***************************************/
// Home Page
//***************************************/
    
    Route::permanentRedirect('/', '/wf1');

    Route::get('/wf1', [WF1_controller::class, 'index']);


//***************************************/
// Homepage Results
//***************************************/
    
    Route::get('/wf2', [WF2_controller::class, 'index']);
    
//***************************************/
// Restaurant Menu
//***************************************/
    
    Route::get('/wf3', [WF3_controller::class, 'index']);
    
//***************************************/
// About Us
//***************************************/

    Route::get('/wf4', function () {return view('wf4');});

//***************************************/
// Login
//***************************************/
    
    Route::get('/wf5_login', function () {return view('wf5_login');});
    Route::get('/wf5_register', function () {return view('wf5_register');});

//***************************************/
// Owner Profile
//***************************************/
    
    Route::get('/wf6', [WF6_controller::class, 'index']);

//***************************************/
//  Menu Pictures
//***************************************/
    
    Route::get('/wf7', function () {return view('wf7');});

//***************************************/
// Edit Menu Item
//***************************************/
    
Route::get('/wf8', [WF8_controller::class, 'index']);





    
//***************************************/
//Login
//***************************************/


// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);