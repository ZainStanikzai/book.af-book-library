<?php

use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Url;
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

Route::get("/",App\Livewire\Index::class)->name("front.home");
Route::get("/library",App\Livewire\Library::class)->name("front.library");
Route::get("/author",App\Livewire\Author::class)->name("front.author");

