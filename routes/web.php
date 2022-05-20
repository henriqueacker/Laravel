<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class, 'exibirNome'] );

Route::get('/login/{id}',[HomeController::class, 'index'] );    
