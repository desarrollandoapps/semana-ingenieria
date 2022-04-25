<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ConferencistaController;
use App\Http\Controllers\InscripcionController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/', [EventoController::class, 'index'])->name('welcome');
Route::get('/inscripcion/{evento}', [InscripcionController::class, 'inscripcion'])->name('inscripcion');
Route::post('/inscripcion', [InscripcionController::class, 'store'])->name('inscripcion.store');

Route::get('/conferencista/{id}', [ConferencistaController::class, 'show'])->name('verConferencista');
