<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('homepage');
});
Route::get('/design-gallery',function (){
    return view('designgallery');
});
Route::get('/modular-kitchen',function (){
    return view('modkitchen');
});
Route::get('/view',function (){
    return view('view');
});

// Route::get('/delete',function (){
//     return view('delete');
// });

// Route::get('/Warbrobe ',function (){
//     return view('Warbrobe');
// });

// Route::get('/todo_show',function (){
//     return view('todo_show');
// });

Route::get('view',[todoController::class, 'show']);
// Route::get('delete',[todoController::class, 'show']);

Route::post('todo_submit',[todoController::class, 'store']); //routes for store value in db

Route::get('edit/{id}',[todoController::class,'edit']);
Route::post('update/{id}',[todoController::class,'update']);

// Route::get('delete/{id?}',[todoController::class,'destroy']);
Route::get('delete/{id}',[todoController::class,'destroy']);


