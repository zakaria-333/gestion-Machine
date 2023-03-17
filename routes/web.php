<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalleController;///important
use App\Http\Controllers\MachineController;///important
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

Route::resource('/create',SalleController::class);
Route::resource('/createM',MachineController::class);


Route::get('/', function () {
    return view('welcome');
});
Route::get('/superadmin',function(){
    return view('superadmin');
});
/* Route::get('/superadmin/delete',function(){
    return view('auth/delete');
}); */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('superadmin')->middleware('auth')->group(function(){
    Route::get('',[App\Http\Controllers\Superadmin::class, 'index'])->name('superadmin');
    Route::get('/users',[App\Http\Controllers\Superadmin::class, 'index']);
    Route::get('/delete/{user_id}',[App\Http\Controllers\Superadmin::class, 'delete']);
    Route::get(('/register'),[App\Http\Controllers\Superadmin::class, 'register'])->name('registerr');
});

Route::get('/machines', [SalleController::class,'index']);

Route::prefix('admin')->middleware('auth')->group(function(){
Route::get('',[App\Http\Controllers\Admin::class, 'index'])->name('admin');
}); 
Route::get('/statistique', [MachineController::class, 'statistique'])->name('statiqtique');
  