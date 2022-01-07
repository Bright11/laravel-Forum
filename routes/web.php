<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\admin\adminController;

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



//Route::get('/', function () {
   // return view('welcome');
//});

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/',[postController::class,'index'])->name('index');
Route::get('askquestion',[postController::class,'askquestion'])->name('askquestion');

Route::get('category',[adminController::class,'category'])->name('category');
Route::post('insertcart',[adminController::class,'insertcart'])->name('insertcart');
Route::post('insertq',[QuestionController::class,'insertq'])->name('insertq');
Route::get('editpostpage/{id}',[postController::class,'editpostpage'])->name('editpostpage');
Route::put('editq/{id}',[postController::class,'editq'])->name('editq');
Route::get('readmore/{id}',[postController::class,'readmore'])->name('readmore');
Route::get('allcategory/{id}',[postController::class,'allcategory'])->name('allcategory');

Route::post('submitanswer/{id}',[postController::class,'submitanswer'])->name('submitanswer');

Route::get('/viewquestion', [adminController::class, 'viewquestion'])->name('viewquestion');
Route::get('/viewcategory', [adminController::class, 'viewcategory'])->name('viewcategory');
Route::get('deleteq/{id}',[adminController::class,'deleteq'])->name('deleteq');
Route::get('deletecategory/{id}',[adminController::class,'deletecategory'])->name('deletecategory');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

