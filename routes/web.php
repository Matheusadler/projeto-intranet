<?php

use App\Http\Controllers\NoticiaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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

Route::get('/register', function () {
    return view('site.register');
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
});

Route::get('/perfil', function () {
    return view('admin.pages.perfil');
});

Route::get('/capa', function () {
    return view('admin.pages.capa');
});

Route::get('/editoria', function () {
    return view('admin.pages.editoria');
});

Route::get('/galeria', function () {
    return view('admin.pages.galeria');
});

Route::get('/imagem', function () {
    return view('admin.pages.imagem');
});

Route::get('/modulo', function () {
    return view('admin.pages.modulo');
});

Route::get('/operacao', function () {
    return view('admin.pages.operacao');
});

Route::get('/plantao', function () {
    return view('admin.pages.plantao');
});


Route::get('/ramal', function () {
    return view('admin.pages.ramal');
});

Route::get('/usuario', function () {
    return view('admin.pages.usuario');
});

Auth::routes();
Route::get('', 'HomeController@index')->name('default');
Route::get('home', 'HomeController@index')->name('home');
Route::get('login', 'LoginController@index')->name('login');
Route::get('register', 'RegisterController@index')->name('register');
Route::get('forgetpass', 'ForgetpassController@index')->name('forgetpass');
Route::get('logout', 'LogoutController@logout')->name('logout');

Route::resource('noticia', 'NoticiaController');
Route::resource('imagem', 'ImagemController');
Route::resource('editoria', 'EditoriaController');
Route::resource('promocao', 'PromocaoController');
Route::resource('operacao', 'OperacaoController');
Route::resource('modulo', 'ModuloController');
