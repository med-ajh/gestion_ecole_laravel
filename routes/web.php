<?php

use App\Http\Controllers\AdministratifController;
use App\Http\Controllers\EtudiantController;
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

Route::get("/etudiant/afficher/{id}",[EtudiantController::class,"Afficher"]);
Route::get("/etudiant/{id}",[EtudiantController::class,"Affiche"]);
Route::get("/etudiant",[EtudiantController::class,"index"]);
Route::Resource("administratifs",AdministratifController::class);