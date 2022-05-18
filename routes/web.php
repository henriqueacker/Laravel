<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/{id}',[HomeController::class, 'index'] );
Route::get('login',[HomeController::class, 'index'] );    
