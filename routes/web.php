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
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/articles/{articleSlug}',[ArticleController::class,'single'])->name('articles');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/search', [ArticleController::class, 'search'])->name('search');

Route::prefix('admin')->namespace('Admin')->middleware(['auth'])->group(function() {
    Route::get('/articles' , [ArticleController::class,'index'])->name('adminarticles');
    Route::get('/articles/create' , [ArticleController::class,'create'])->name('createarticle');
    Route::post('/articles/create',[ArticleController::class,'store'])->name('storearticle');
    Route::get('articles/edit/{article}' , [ArticleController::class,'edit'])->name('editarticle');
    Route::put('articles/edit/{article}' ,[ArticleController::class,'update'])->name('update.article');
    Route::delete('/articles/{article}' , [ArticleController::class,'delete'])->name('delete.article');

});

Route::prefix('auth')->namespace('auth')->group(function(){

    Route::get('/register',[AuthController::class,'ShowRegesisterForm'])->name('register');
    Route::get('/login',[AuthController::class,'ShowLoginForm'])->name('login');
    route::post('/register',[AuthController::class,'register'])->name('regestered');
    route::post('/login',[AuthController::class,'login']);
    route::post('/logout',[AuthController::class,'logout'])->name('logout');




});


Route::middleware("auth:api")->group(function () {
    // Show user profile
    Route::get('profile', [LoginController::class, 'profile']);
});

Route::post('/articles/{article}/comments', [CommentController::class,'store'])->name('comments.store');
