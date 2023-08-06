<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\FrontenController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DonorController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\frontend\FrontController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',[FrontController::class,'index']);
// Route::get('/category',[FrontController::class,'category']);
// Route::get('view-category/{slug}',[FrontController::class ,'viewCategory']);
// Route::get('/category/{cate_slug}/{prod_slug}',[FrontController::class,'productView']);
Auth::routes();
Route::get('/dashboard2', function () {
    return view('admin.dashboard');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::middleware(['auth','isAdmin'])->group(function()
 {
 Route::get('/dashboard',[FrontenController::class, 'index'] );
 Route::get('/Donors',[DonorController::class, 'index'] );
 Route::get('/view-status',[DonorController::class, 'viewstatus'] );
 Route::get('/add-donor',[DonorController::class, 'add'] ); //when i have page of website
 Route::post('/insert-donor',[DonorController::class, 'insert'] );
 Route::get('/edit-donor/{id}',[DonorController::class,'edit']);
 Route::put('/update-donor/{id}',[DonorController::class,'update']);
 Route::get('/delete-donor/{id}',[DonorController::class,'destroy']);

 Route::get('/types',[TypeController::class,'index']);
 Route::get('/add-types',[TypeController::class,'add']);
 Route::post('/insert-type',[TypeController::class, 'insert'] );
 Route::get('/edit-type/{id}',[TypeController::class,'edit']);
 Route::put('/update-types/{id}',[TypeController::class,'update']);
Route::get('/delete-type/{id}',[TypeController::class,'destroy']);

Route::get('/profiles',[ProfileController::class,'show'] )->name('profile');
Route::get('/My-profile/{id}',[ProfileController::class,'viewProfile']);
Route::post('/profile', 'ProfileController@update')->name('profile.update');

// Route::post('/queue/store', 'QueueController@store')->name('queue.store');
});
