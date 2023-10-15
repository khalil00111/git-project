<?php

use App\Http\Controllers\ChauffeurController;
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

Auth::routes();

Route::group(['middleware' => 'auth'], function()
{


    
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/chauffeur', [ChauffeurController::class, 'index' ])->name('chauffeur.index');
    Route::get('/chauffeur', [ChauffeurController::class, 'index'])->name('chauffeur.index');
    Route::get('/chauffeur/create', [ChauffeurController::class, 'create'])->name('chauffeur.create');
    Route::post('/chauffeur', [ChauffeurController::class, 'store'])->name('chauffeur.store');
    Route::get('/chauffeur/{id}', [ChauffeurController::class, 'show'])->name('chauffeur.show');
    Route::get('/chauffeur/{id}/edit', [ChauffeurController::class, 'edit'])->name('chauffeur.edit');
    Route::post('/chauffeur/{id}', [ChauffeurController::class, 'update'])->name('chauffeur.update');
    Route::delete('/chauffeur/{id}', [ChauffeurController::class, 'destroy'])->name('chauffeur.destroy');

    // Only authenticated users may enter...
});





// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
