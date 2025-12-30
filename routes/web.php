<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'inicio']);
Route::get('/nosotros', [WebController::class, 'nosotros']);
Route::get('/mision-vision', [WebController::class, 'misionVision']);
Route::get('/servicios', [WebController::class, 'servicios']);
Route::get('/contacto', [WebController::class, 'contacto']);
