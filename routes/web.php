<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);

Route::get('/project', [ProjectController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'sendMail']);
