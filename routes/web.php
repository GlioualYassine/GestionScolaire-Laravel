<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\EtudiantController;
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

Route::get('/', function () {
    // Check if the user is authenticated
    if (auth()->check()) {
        // If authenticated, redirect to the dashboard
        return redirect()->route('dashboard');
    } else {
        // If not authenticated, show the login page
        return view('auth.login');
    }
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



// Routes pour les filières
Route::get('/filieres', [FiliereController::class, 'index'])->name('filieres.index');
Route::get('/filieres/create', [FiliereController::class, 'create'])->name('filieres.create');
Route::post('/filieres', [FiliereController::class, 'store'])->name('filieres.store');
Route::get('/filieres/{filiere}', [FiliereController::class, 'show'])->name('filieres.show');
Route::get('/filieres/{filiere}/edit', [FiliereController::class, 'edit'])->name('filieres.edit');
Route::put('/filieres/{filiere}', [FiliereController::class, 'update'])->name('filieres.update');
Route::delete('/filieres/{filiere}', [FiliereController::class, 'destroy'])->name('filieres.destroy');

// Routes pour les étudiants
Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants.index');
Route::get('/etudiants/create', [EtudiantController::class, 'create'])->name('etudiants.create');
Route::post('/etudiants', [EtudiantController::class, 'store'])->name('etudiants.store');
Route::get('/etudiants/{etudiant}', [EtudiantController::class, 'show'])->name('etudiants.show');
Route::get('/etudiants/{etudiant}/edit', [EtudiantController::class, 'edit'])->name('etudiants.edit');
Route::put('/etudiants/{etudiant}', [EtudiantController::class, 'update'])->name('etudiants.update');
Route::delete('/etudiants/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiants.destroy');
Route::post('/etudiants/{etudiant}/reaffect', [EtudiantController::class, 'reaffect'])->name('etudiants.reaffect');
});

require __DIR__.'/auth.php';
