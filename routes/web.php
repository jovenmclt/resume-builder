<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;

Route::get('/', [FrontEndController::class, 'Index']);
Route::get('/about', [FrontEndController::class, 'About']);
Route::get('/features', [FrontEndController::class, 'Features']);
Route::get('/templates', [FrontEndController::class, 'Templates']);

//Action
Route::post('/usermessage', [FrontEndController::class, 'ChatBox']);

//Templates
Route::get('/template1', [FrontEndController::class, 'Template_1']);
Route::get('/template2', [FrontEndController::class, 'Template_2']);
Route::get('/template3', [FrontEndController::class, 'Template_3']);
Route::get('/template4', [FrontEndController::class, 'Template_4']);
