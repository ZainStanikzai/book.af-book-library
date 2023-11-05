<?php

use App\Models\Book;
use App\Models\BookLanguage;
use App\Models\BookMedia;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\UserDownload;
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

Route::get("/",App\Http\Livewire\Home::class);
Route::get("/test", function(){
    $book = UserDownload::where("id","2")->first();


    return $book->book;
});