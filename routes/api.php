<?php

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('usuarios', [UsersController::class, 'index'])->name('tesste');
