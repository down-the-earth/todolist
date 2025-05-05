<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckUserSession;
use App\Http\Controllers\AdminController;
// Route::get('/', function () {
//     return view('auth/login');
// });
Route::get('/',[LoginController::class,'index'])->name('login');

Route::prefix('todolist')
->middleware([CheckUserSession::class])
->group(function(){
    Route::get('/',[TodoListController::class,'index'])->name('index');
Route::post('add',[TodoListController::class,'add'])->name('add');
Route::get('delete/{id}',[TodoListController::class,'delete'])->name('delete');
Route::get('edit/{id}',[TodoListController::class,'edit'])->name('edit');
Route::post('update/{id}',[TodoListController::class,'update'])->name('update');
Route::get('logout',[LoginController::class,'logout'])->name('logout');
});

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('admin');
    Route::get('logout',[LoginController::class,'logout'])->name('logout');

});
Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'login_user'])->name('login');
Route::get('register',[LoginController::class,'register'])->name('register');
Route::post('register_user',[LoginController::class,'register_user'])->name('register_user');
Route::post('login_user',[LoginController::class,'login_user'])->name('login_user');