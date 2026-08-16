<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;




Route::get('/', [UserController::class, 'Homepage'])->name('Homepage');
Route::Post('/submit-form', [UserController::class, 'submit'])->name('submit');
