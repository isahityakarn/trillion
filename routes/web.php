<?php

use App\Http\Controllers\FronController;
use Illuminate\Support\Facades\Route;




Route::get('/', [FronController::class, 'index']);



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');