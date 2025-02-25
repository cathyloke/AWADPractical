<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    // return redirect('aboutus');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus/{user}', function ($user) {
    return view('contactus', ['user'=>$user]);
});

Route::get('/aboutus/{user}', [UserController::class, 'index']);


Route::get('/user', [UserController::class, 'loadViews']);   //{user} // loadView
