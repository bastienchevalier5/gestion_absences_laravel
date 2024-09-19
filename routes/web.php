<?php

declare(strict_types=1);

use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\MotifController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AcceuilController::class, 'index'])->name('acceuil');

Route::resource('motif', MotifController::class);

Route::resource('absence', AbsenceController::class);

Route::resource('user',UserController::class);
