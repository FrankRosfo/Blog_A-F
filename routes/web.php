<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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
Route::post('/mail', [MailController::class, 'getMail']);

Route::get('/l', function () {
    return view('blog.registro');
})->name('registro');

Route::get('/login', function () {
    return view('blog.login');
})->name('login');

Route::get('/inicio', function () {
    return view('blog.index');
})->name('inicio');

Route::get('/contacto', function () {
    return view('blog.contact');
})->name('contacto');

Route::get('/blog', function () {
    return view('blog.blog');
})->name('blog');

Route::get('/detalles', function () {
    return view('blog.details');
})->name('detalles');