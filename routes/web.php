<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Crud\mainController;
use App\Http\Controllers\Crud\CategoryController;
use App\Http\Controllers\Crud\PostController;

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

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/view/{post}', [\App\Http\Controllers\ViewController::class, 'view'])->name('welcome.view');

Route::group(['prefix'=>'crud', 'as'=>'crud.', 'middleware'=>'auth'], function (){
    Route::get('main.index', [MainController::class, 'main'])->name('main.index');
    Route::resource("/category", CategoryController::class);
    Route::resource('/post', PostController::class);

    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

