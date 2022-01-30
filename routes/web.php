<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

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

Route::post('/', [RegisterController::class, 'guardar'])->name('registro.guardar');

Route::post('/login', [SessionController::class, 'ingresar'])->name('login.ingresar');

Route::get('/', [RegisterController::class, 'create'])->name('registro');

Route::get('/login', [SessionController::class, 'create'])->name('login');

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