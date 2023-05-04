<?php

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

Route::get('/', fn () => view('welcome'));

Route::get('/ralfs', fn () => view('pages.ralfs'))->name('ralfs');
Route::get('/peteris', fn () => view('pages.peteris'))->name('peteris');
Route::get('/verners', fn () => view('pages.verners'))->name('verners');
Route::get('/niks', fn () => view('pages.niks'))->name('niks');
Route::get('/sandris', fn () => view('pages.sandris'))->name('sandris');
