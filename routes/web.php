<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\formcontroller;
use App\Http\Controllers\inscriptioncontroller;
use App\Http\Controllers\Mycontroller;
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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/HOME', function () {
    return view('welcome');
});
Route::get('/P1', function () {
    return view('FS.FS202');
});
Route::get('/P2', function () {
    return view('FS.FS201');
});
Route::get('/P3', function () {
    return view('MOBILE.mobile201');
});
//ces chemins pour les hypertexte:
Route::get('/test', function () {
    return view('MOBILE.mobile201');
});
Route::get('/test2', function () {
    return view('FS.FS202');
});
Route::get('/test1', function () {
    return view('FS.FS201');
});

// reduiser toutes les pages en une seule function avec cette methodes
Route::get('{n}', function ($n) {
    if ($n == 'test') {
        return view('MOBILE.mobile201');
    } elseif ($n == 'test1') {
        return view('FS.FS201');
    } elseif ($n == 'test2') {
        return view('FS.FS202');
    } else {
        return view('welcome');
    }
});


//Route::get('/toto',[Mycontroller::class,'testfunction']);
//Route::get('/laylay',[Mycontroller::class,'defync']);



//Route::post('/inscription', [inscriptioncontroller::class,'getData']);
//Route::post('/inscription', [inscriptioncontroller::class,'postData']);
Route::post('/inscription', [inscriptioncontroller::class,'putData']);

Route::resource('stagiaire',formcontroller::class);

Route::get('/login',[Authcontroller::class,'login'])->name('authlogin');
Route::post('/login',[Authcontroller::class,'dologin']);





