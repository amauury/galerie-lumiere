<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;


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

Route::get('/', [\App\Http\Controllers\PostController::class, 'index']);

Route::get('dashboard', DashboardController::class)
    ->name('dashboard')
    ->middleware('auth');

Route::get('login', [AuthController::class, 'login'])
    ->name('login');


Route::post('authenticate', [AuthController::class, 'authenticate'])
    ->name('authenticate');



    

Route::post('/update-size', [GalleryController::class, 'updateSize'])->name('updateSize');
Route::delete('/delete-image/{id}', [GalleryController::class, 'deleteImage'])->name('deleteImage');
Route::post('/upload-image', [GalleryController::class, 'uploadImage'])->name('uploadImage');
Route::get('/move-up/{id}', [GalleryController::class, 'moveUp'])->name('moveUp');
Route::get('/move-down/{id}', [GalleryController::class, 'moveDown'])->name('moveDown');



Route::resource('artistes', ArtisteController::class);
Route::post('artistes/upload', [ArtisteController::class, 'uploadImage'])->name('artistes.upload');


Route::resource('oeuvres', OeuvreController::class);
Route::post('oeuvres/upload', [OeuvreController::class, 'uploadImage'])->name('oeuvres.upload');