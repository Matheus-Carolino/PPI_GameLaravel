<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\PartidaController;
use App\Http\Controllers\UserController;
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
    return view('login');
})->name('login');

Route::get('/index', function(){
    return view('index');
})->middleware('auth')->name('index');

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/exibir/ranking', [ModalController::class, 'exibirRanking']);

Route::post('/autenticar', [AuthController::class, 'login']);

Route::get('/register/form', [ModalController::class, 'registerForm']);

Route::post('/register/user', [UserController::class, 'create']);

Route::post('/cadastrar/partida', [PartidaController::class, 'create']);
