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
});


Route::get('/index', [UserController::class, 'index']);
Route::get('/addUser', [UserController::class, 'showAddUserForm']);
Route::post('/addUser', [UserController::class, 'addUser']);
Route::get('/deleteUser/{id}', [UserController::class, 'deleteUser']);
Route::get('/editUser/{id}', [UserController::class, 'showEditUserForm']);
Route::post('/editUser/{id}', [UserController::class, 'editUser']);

Route::get('/datatest', [UserController::class, 'testData']);



//add route
Route::get('/oneToOne', [UserController::class, 'OnetoOne']);
Route::get('/oneToMany', [UserController::class, 'OnetoMany']);


Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login']);

/**
 * When using middlewareGroups
 * 'protectedPage' => [
 *   \App\Http\Middleware\ageCheck::class,
 *]
 */
// Route::group(['middleware' => ['protectedPage']], function () {
//     Route::get('/login', [UserController::class, 'showLoginForm']);
// });

//when using routeMiddleware
/**
 *  protected $routeMiddleware = [
 *      'protectedPage' => \App\Http\Middleware\ageCheck::class,
 *  ]
 */
Route::get('/login', [UserController::class, 'showLoginForm'])->middleware('protectedPage');
