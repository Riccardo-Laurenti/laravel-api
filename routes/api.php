<?php

use App\Http\Controllers\Api\ProjectController;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/




// Rotta lista dei post
Route::get('/projects', [ProjectController::class, 'index']);


// Rotta per avere il dettaglio di un post
Route::get('/projects/{project}', [ProjectController::class, 'show']);


//Route::resource('posts', ProjectController::class);
