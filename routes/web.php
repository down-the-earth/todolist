<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('todo',[TodoListController::class,'index'])->name('index');
Route::post('add',[TodoListController::class,'add'])->name('add');
Route::get('delete/{id}',[TodoListController::class,'delete'])->name('delete');
Route::get('edit/{id}',[TodoListController::class,'edit'])->name('edit');
Route::post('update/{id}',[TodoListController::class,'update'])->name('update');