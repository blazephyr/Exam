<?php

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
Route::get('login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('homepage');
});

Auth::routes();

Route::get('songs/add',[App\Http\Controllers\SongController::class, 'create'])->name('song.create');
Route::get('songs/{song}',[App\Http\Controllers\SongController::class, 'get'])->name('song.show');
Route::post('songs',[App\Http\Controllers\SongController::class, 'store'])->name('song.store');
Route::get('songs',[App\Http\Controllers\SongController::class, 'index'])->name('songs.index');
Route::get('songs/{song}/delete',[App\Http\Controllers\SongController::class, 'delete'])->name('song.delete');
Route::get('songs/{song}/edit',[App\Http\Controllers\SongController::class, 'edit'])->name('song.edit');
Route::post('songs/{song}/update',[App\Http\Controllers\SongController::class, 'update'])->name('song.update');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
