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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuarios', function () {
    return 'Usuarios';
});
Route::get('/usuarios/nuevo', function () {
    return 'Crear nuevo usuario';
});
Route::get('/usuarios/{id}', function ($id) {
    return 'Mostrar detalles del usuario:{$id}';
})->where('id','[0-9]+');

/*Subir imagenes en un formulario*/
Route::get('/form', [App\Http\Controllers\FormController::class,'form'])->name('form');
Route::post('/save', [App\Http\Controllers\FormController::class,'save'])->name('save');

