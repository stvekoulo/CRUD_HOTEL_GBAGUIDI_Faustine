<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChambreController;
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

Route:: get('/chambre', [ChambreController::class, 'liste_chambre']);
Route:: get('/ajouter', [ChambreController::class, 'ajouter_chambre']);
Route:: post('/ajouter', [ChambreController::class, 'ajouter_chambre_traitement']);
