<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\EntregasController;
use App\Http\controllers\LoginController;
use App\Http\controllers\CadastroController;

Route::get('/', [HomeController::class, 'Home']);
Route::get('/entregas', [EntregasController::class, 'Entregas']);
Route::get('/login', [LoginController::class, 'Login']);
Route::get('/cadastro', [CadastroController::class, 'Cadastro']);



