<?php

use Illuminate\Support\Facades\Route;
Route::get('/',  [App\Http\Controllers\NewController::class,'index']);
Route::get('/other',  [App\Http\Controllers\Others\NewController::class,'index']);
// Route::get('others', "Others\NewController@index");

