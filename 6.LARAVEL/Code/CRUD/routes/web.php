<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/',[StudentController::class,"data"]);

Route::get('/about',[StudentController::class,"about"]);
Route::get('/contact',[StudentController::class,"contact"]);
Route::get('/register',[StudentController::class,"register"]);
Route::POST('/register',[StudentController::class,"create"]);
Route::get('/userView',[StudentController::class,"userview"]);
Route::get('/user/delete/{id}',[StudentController::class,"user_dlt"])->name('dlt');
Route::get('/user/edit/{id}',[StudentController::class,"user_edit"])->name('edit');
Route::POST('/user/update/{id}',[StudentController::class,"user_update"])->name('update');






// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });

