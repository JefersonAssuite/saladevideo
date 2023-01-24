<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/events/create',[EventsController::class,'create'])->middleware('auth');
Route::get('/dashboard',[EventsController::class,'dashboard'])->middleware('auth');
Route::post('/events',[EventsController::class,'store']);
Route::get('/',[EventsController::class,'index']);
Route::get('/events/{id}',[EventsController::class,'show']);


