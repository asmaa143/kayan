<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Doctor;


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


Route::prefix('doctor')->name('doctor.')->group(function(){

    Route::middleware(['guest:web'])->group(function(){
        Route::view('/login','site.login')->name('login');
    });

    Route::middleware(['auth:doctor'])->group(function(){
        Route::get('',[Doctor\homeController::class,'index'])->name('home');
    });

});


Route::prefix('dashboard')->name('dashboard.')->group(function(){

    Route::middleware(['guest:web'])->group(function(){
        Route::view('/login','dashboard.login')->name('login');
        Route::post('/check',[Dashboard\authController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin'])->group(function(){
        Route::view('/home','dashboard.home')->name('home');
        //   Route::post('/logout',[UserController::class,'logout'])->name('logout');
    });

});





Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:web'])->group(function(){
          Route::view('/login','user.login')->name('login');
        //   Route::view('/register','dashboard.user.register')->name('register');
        //   Route::post('/create',[UserController::class,'create'])->name('create');
        //   Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web'])->group(function(){
          Route::view('/home','user.home')->name('home');
        //   Route::post('/logout',[UserController::class,'logout'])->name('logout');
        //   Route::get('/add-new',[UserController::class,'add'])->name('add');
    });

});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


// require __DIR__.'/auth.php';
