<?php

use App\Http\Controllers\DossiermedicalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HopitalController;
use App\Http\Controllers\PatientController;
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

Route::get('/', [HopitalController::class, 'index'])->name('hopitaux');
Route::get('/Patients', [PatientController::class, 'index'])->name('patients');
Route::get('/dossiermedical/{idpatient}', [DossiermedicalController::class, 'index'])->name('dossiermedical');

Route::get('/hopital/{hopital}', [HopitalController::class, 'show'])->name('showhopital');
