<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Models\Applicant;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;

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


Route::redirect('/', 'dashboard');


Route::get('/candidatos', [ApplicantController::class, 'index'])->name('candidatos.index');
Route::get('/canditatos/create', [ApplicantController::class, 'create'])->name('canditatos.create');
Route::post('/candidatos', [ApplicantController::class, 'store'])->name('canditados.store');
Route::get('/candidatos/{id}/edit', [ApplicantController::class, 'edit'])->name('candidatos.edit');


Route::get('/admin/usarios',[AdminController::class, 'index'])->name('admin.usuarios.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
