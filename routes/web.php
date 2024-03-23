<?php

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\ArticleFrontController;



Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/articles/{articleSlug}',[ArticleFrontController::class,'single'])->name('articles');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');

Route::prefix('admin')->namespace('Admin')->group(function() {
    Route::get('/articles' , [ArticleController::class,'index'])->name('adminarticles');
    Route::get('/articles/create' , [ArticleController::class,'create'])->name('createarticle');
    Route::post('/articles/create',[ArticleController::class,'store'])->name('storearticle');
    Route::get('/articles/{article}/edit' , [ArticleController::class,'edit'])->name('editarticle');
    Route::put('/articles/{article}/edit' ,[ArticleController::class,'update'])->name('updatearticle');
    Route::delete('/articles/{article}' , [ArticleController::class,'delete'])->name('distoyarticle');

});

Route::prefix('auth')->namespace('auth')->group(function(){
    Route::get('/login', function () {
        return view('auth.login');
    });


    Route::get('/register', function () {
        return view('auth.register');
    });
});