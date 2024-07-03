<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\EventController;
use App\Http\controllers\LoginController;
use App\Http\controllers\CadastroController;

Route::get('/', [HomeController::class, 'Home']);
Route::get('/login', [LoginController::class, 'Login']);
Route::get('/cadastro', [CadastroController::class, 'Cadastro']);



Route::get('/entregas', [EventController::class, 'entregas']);
Route::get('/events/create',[EventController::class, 'create']);
Route::post('/events',[EventController::class, 'store']);


