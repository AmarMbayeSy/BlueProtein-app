<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvantageController;
use App\Http\Controllers\CompositionController;
use App\Http\Controllers\UtilisationController;
use App\Http\Controllers\PrecautionController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CultureController;
use App\Http\Controllers\BlocController;
use App\Http\Controllers\RevendeurController;
use App\Http\Controllers\EtapeController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ProduitController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard-blogen-theme-master.index');
    });
    Route::get('/posts', function () {
        return view('dashboard-blogen-theme-master.posts');
    });
    Route::get('/', [ProduitController::class, 'create'])->name('produits.create');
    Route::get('/produits/{produit}', [ProduitController::class, 'show'])->name('produits.show');
    Route::delete('/produits/{produit}', [ProduitController::class, 'destroy'])->name('produits.destroy');
});

require __DIR__.'/auth.php';

Route::get('/try', [ProduitController::class, 'create_accueil']);
Route::post('/compositions', [CompositionController::class, 'store'])->name('compositions.store');
Route::post('/avantages', [AvantageController::class, 'store'])->name('avantages.store');
Route::post('/utilisations', [UtilisationController::class, 'store'])->name('utilisations.store');
Route::post('/precautions', [PrecautionController::class, 'store'])->name('precautions.store');
Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store');
Route::post('/cultures', [CultureController::class, 'store'])->name('cultures.store');
Route::post('/blocs', [BlocController::class, 'store'])->name('blocs.store');
Route::post('/revendeurs', [RevendeurController::class, 'store'])->name('revendeurs.store');
Route::post('/etapes', [EtapeController::class, 'store'])->name('etapes.store');
Route::post('/certifications', [CertificationController::class, 'store'])->name('certifications.store');

Route::post('/produits', [ProduitController::class, 'store'])->name('produits.store');


Route::get('/apropos', function () {
    return view('site.apropos');
});
Route::get('/partenaires', function () {
    return view('site.partenaires');
});
Route::get('/produits', function () {
    return view('site.produits');
});
Route::get('/Services', function () {
    return view('site.Services');
});
