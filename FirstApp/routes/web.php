<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\testControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/testpage', function () {
    return view ('testpages.test');
})->middleware('auth');
require __DIR__.'/auth.php';

Route::get('/test/{id}',[testControler::class,'GetUsers']);
Route::get('/home', function () {
    return view ('home');
})->middleware('auth');
require __DIR__.'/auth.php';

Route::get('/test', [testControler::class, 'getPage']);
Route::post(    '/testdata',[testControler::class,'formdata'])->name('postdata');

Route::get('/dash',function() {
    return view('layouts.Master.main');
});
Route::middleware(['auth', 'role:administrator'])->group(function () {
    Route::resource('categories', CategoryController::class);

});
