<?php

use App\Http\Controllers\CitationController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CitationController::class,'index'])->name('index');
Route::get('citation/create',[CitationController::class,'create'])->name('create');
Route::post('citation/store-post',[CitationController::class,'store'])->name('store');


