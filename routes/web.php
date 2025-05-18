<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;

Route::get('/', [FrontEndController::class, 'Index']);
Route::get('/About', [FrontEndController::class, 'About']);
Route::get('/Features', [FrontEndController::class, 'Features']);
