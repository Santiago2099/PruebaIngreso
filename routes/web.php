<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramadorController;

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

Route::get('/', [ProgramadorController::class,'index']);
// Controlador ProgramadorController
Route::get('/programadores/create', [ProgramadorController::class,'view'] );
Route::post('/programadores/store', [ProgramadorController::class,'store'] );

