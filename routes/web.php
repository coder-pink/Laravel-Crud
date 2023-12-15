<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController ;
use App\Http\Controllers\DemoController ;



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
//     return view('demo');
// });



// Route::get('/demo/{name}/{id?}', function($name, $id = null){
//     // echo "Hello Universe!!";
//     echo $name . " ";
//     echo $id;

// });

Route::get('/', [DemoController::class, 'index']);
Route::get('/register', [RegistrationController::class, 'index']);
// Route::get('/welcome', [RegistrationController::class, 'welcome']);
Route::get('/register/view', [RegistrationController::class, 'view']);
Route::get('/register/delete/{id}', [RegistrationController::class, 'delete'])->name('register.delete');
Route::get('/register/edit/{id}', [RegistrationController::class, 'edit']);
Route::post('/register/update/{id}', [RegistrationController::class, 'update']);
Route::post('/register', [RegistrationController::class, 'register']);


