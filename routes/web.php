<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;

Route::get('/', [FrontEndController::class, 'Index']);
Route::get('/about', [FrontEndController::class, 'About']);
Route::get('/features', [FrontEndController::class, 'Features']);
Route::get('/templates', [FrontEndController::class, 'Templates']);

//Templates
Route::get('/template1', [FrontEndController::class, 'Template_1']);
