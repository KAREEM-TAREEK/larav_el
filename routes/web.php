<?php

use App\Http\Controllers\PasteController;
use App\Http\Controllers\postControl;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function () {
    return view('users');
});
Route::get('paste', function () {
    return view('paste');
});

Route::get('post',[postControl::class,'kareemTreek']);

Route::resource('user', UserController::class);


//------------------------------------------------------------------------------
Route::get('paste',[PasteController::class,"index"])->name('paste');
Route::get('paste/create',[PasteController::class,"create"]);
Route::get('paste/edit/{id}',[PasteController::class,"edit"])->name("post.edit");
//delete
Route::get('paste/delete/{id}',[PasteController::class,"delete"])->name("post.delete");
//update
Route::post('paste/update/{id}',[PasteController::class,"update"]) ; //->name('paste.update');

 Route::post('paste/insert',[PasteController::class,"insert"]);
//delete all
// Route::get('paste/delete/All',[PasteController::class,"deleteAll"])->name("deleteAll");






