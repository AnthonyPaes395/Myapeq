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
    return view('inicio');
});


// Route::get('/inicio', function () {
//     return view('inicio');
// });

// Route::get('/nosotros', function () {
//     return view('nosotros');
// });

// Route::get('/producto', function () {
//     return view('producto');
// });

// Route::get('/contacto', function () {
//     return view('contacto');
// });

Route::get('/inicio', [App\Http\Controllers\BaseController::class, 'inicio']);
Route::get('/nosotros', [App\Http\Controllers\BaseController::class, 'nosotros']);
Route::get('/producto', [App\Http\Controllers\BaseController::class, 'producto']);
Route::get('/contacto', [App\Http\Controllers\BaseController::class, 'contacto']);