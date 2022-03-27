<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\SousCategorieController;
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
    return view('formation.index');
});

Route::get('/dashboard', function () {
    return view('formation.add');
})->middleware(['auth'])->name('formationAdd');

require __DIR__.'/auth.php';

Route::get('/formation', [FormationController::class, 'index'])->name('accueil');
Route::get('/addFormation', [FormationController::class, 'create'])->middleware(['auth'])->name('AjoutFormation');
Route::post('/addFormation', [FormationController::class, 'store'])->name('AjoutFormation');

Route::get('/addCategorie', [CategorieController::class, 'create'])->name('AjoutCategorie');
Route::post('/addCategorie', [CategorieController::class, 'create'])->name('AjoutCategorie');

Route::get('/create', [SousCategorieController::class, 'index'])->name('createSouscat');
Route::get('/addSousCategorie', [SousCategorieController::class, 'create'])->name('AjoutSousCategorie');
Route::post('/addSousCategorie', [SousCategorieController::class, 'create'])->name('AjoutSousCategorie');
