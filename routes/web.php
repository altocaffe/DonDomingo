<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'TiendaController@index');
Route::get('/producto/{producto}', 'TiendaController@producto');
Route::get('/nosotros', 'TiendaController@nosotros');
Route::get('/contacto','TiendaController@contacto');
Route::get('/checkout', 'TiendaController@checkout');
Auth::routes(['register' => true]);

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->namespace('Admin')->prefix('admin')->group(function () {
        Route::prefix('productos')->group(function (){
        Route::get('/', 'ProductoController@index');
        Route::get('/create', 'ProductoController@showForm');
        Route::post('/create', 'ProductoController@create');
        Route::delete('delete/{producto}', 'ProductoController@delete');
        Route::get('/{producto}', 'ProductoController@show');
        Route::patch('/edit/{producto}', 'ProductoController@edit');
    });
});
