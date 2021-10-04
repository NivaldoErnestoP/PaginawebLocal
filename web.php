<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::view('/', 'home')->name('home');
Route::view('habitacion', 'habitacion')->name('habitacion');
Route::view('comedor', 'comedor')->name('comedor');
Route::view('sala', 'sala')->name('sala');
Route::view('exterior', 'exterior')->name('exterior');
Route::view('contacto', 'contacto')->name('contacto');
Route::view('acerca', 'acerca')->name('acerca');
Route::view('term', 'term')->name('term');

Route::post('save',[MainController::class, 'save'])->name('registrar.save');

Route::get('contacto',[MainController::class, 'show'])->name('registrar.show');


