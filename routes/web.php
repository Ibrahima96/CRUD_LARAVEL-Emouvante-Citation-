<?php

use App\Http\Controllers\CitationController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CitationController::class,'index'])->name('index');
Route::get('/citation/create',[CitationController::class,'create'])->name('create');
Route::post('/citation/store-post',[CitationController::class,'store'])->name('store');
Route::get('/citation/modifier/{id}',[CitationController::class,'edit'])->name('edit');
Route::put('/citation/update/{id}',[CitationController::class,'update'])->name('update');
Route::delete('/citation/delete/{id}',[CitationController::class,'destroy'])->name('destroy');


