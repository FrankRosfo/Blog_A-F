<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ComentariosController;

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

Route::get('/', [RegisterController::class, 'create'])->middleware('guest')->name('registro');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login');

Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('login.destroy');

Route::get('/blog', [ComentariosController::class, 'blog'])->middleware('auth')->name('blog');

Route::post('/blog', [ComentariosController::class, 'comentarios'])->middleware('auth');

Route::get('/inicio', function () {
    return view('blog.index');
})->middleware('auth')->name('inicio');

Route::get('/contacto', function () {
    return view('blog.contact');
})->middleware('auth')->name('contacto');

Route::get('/1_sistemas', function () {
    return view('blog.1_sistemas');
})->middleware('auth')->name('1_sistemas');

Route::get('/2_sistemas', function () {
    return view('blog.2_sistemas');
})->middleware('auth')->name('2_sistemas');

Route::get('/3_sistemas', function () {
    return view('blog.3_sistemas');
})->middleware('auth')->name('3_sistemas');

Route::get('/4_sistemas', function () {
    return view('blog.4_sistemas');
})->middleware('auth')->name('4_sistemas');

Route::get('/5_sistemas', function () {
    return view('blog.5_sistemas');
})->middleware('auth')->name('5_sistemas');

Route::get('/6_sistemas', function () {
    return view('blog.6_sistemas');
})->middleware('auth')->name('6_sistemas');

Route::get('/7_sistemas', function () {
    return view('blog.7_sistemas');
})->middleware('auth')->name('7_sistemas');

Route::get('/8_sistemas', function () {
    return view('blog.8_sistemas');
})->middleware('auth')->name('8_sistemas');

Route::get('/9_sistemas', function () {
    return view('blog.9_sistemas');
})->middleware('auth')->name('9_sistemas');