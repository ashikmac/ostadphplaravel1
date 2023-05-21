<?php

use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/', [IndexController::class, 'return_input_name']); // 1. This route will retrive and return name value from the form input
Route::get('/header', [IndexController::class, 'return_user_agent']); // 2. This route will retrive and return the User Agent from the request\
// Number 3 is in the api.php
Route::get('/json', [IndexController::class, 'ReturnJson']); // 4. 
Route::post('/upload', [IndexController::class, 'UploadImage']); // 5.
Route::get('/cookie', [IndexController::class, 'return_cookie']); // 6.
Route::post('/submit', function (Request $request) { // 7.
    $email = $request->input('email');
    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.'
    ]);
});
