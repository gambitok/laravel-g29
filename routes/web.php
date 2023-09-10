<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function ($name = "World") {
    return view('hello', ['name' => $name]);
});

Route::get('about-us', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

use App\Http\Controllers\ContactController;

Route::get('contact', [ContactController::class, 'index']);

Route::get('admin', 'App\Http\Controllers\Admin\DashboardController');

Route::resource('admin/categories',
    'App\Http\Controllers\Admin\CategoriesController'
);
