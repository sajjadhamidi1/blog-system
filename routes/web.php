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
use Illuminate\Http\Request;

Route::get('/',[HomeController::class,'home']);
Route::get('/about',[ HomeController::class,'about']);
Route::get('/contact', [HomeController::class,'contact']);

Route::group(['prefix' => 'admin','namespace' => 'Admin'],(function() {
    Route::get('/articles' , [ArticleController::class,'index']);
    Route::get('/articles/create' , [ArticleController::class,'create']);
    Route::post('/articles/create',[ArticleController::class,'store']);
    Route::get('/articles/{id}/edit' , [ArticleController::class,'edit']);
    Route::put('/articles/{id}/edit' , [ArticleController::class,'update']);
    Route::delete('/articles/{id}' , [ArticleController::class,'delete']);

}));

