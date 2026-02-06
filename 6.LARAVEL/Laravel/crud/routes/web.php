<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/insert',[StudentsController::class,'insert']);
Route::get('/display',[StudentsController::class,'getdata']);
Route::get('/edit/{id}', [StudentsController::class, 'fetch_id']);
Route::post('/update', [StudentsController::class, 'update_students']);
Route::get('/delete/{id}', [StudentsController::class, 'del']);
