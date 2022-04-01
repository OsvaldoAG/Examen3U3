<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use App\Http\Controllers\ApiController;

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
    return view('index');
});

Route::get('/venom', function(){
    return view('venom');
})->name('venom');

Route::get('/logan', function(){
    return view('logan');
})->name('logan');

Route::get('/daredevil', function(){
    return view('daredevil');
})->name('daredevil');

Route::get('/punisher', function(){
    return view('punisher');
})->name('punisher');

Route::get('/ghostrider', function(){
    return view('ghostrider');
})->name('ghostrider');

Route::get('/kingshark', function(){
    return view('kingshark');
})->name('kingshark');

Route::get('/redhood', function(){
    return view('redhood');
})->name('redhood');

Route::get('/spawn', function(){
    return view('spawn');
})->name('spawn');

Route::get('/Apivista.blade.php', [ApiController::class, 'inicio'])->name('personajes');