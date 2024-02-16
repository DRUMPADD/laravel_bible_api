<?php

use App\Http\Controllers\BibleController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [BibleController::class, 'getBooks']);
Route::get('/exodo', [Controller::class, 'exodo']);
Route::get('/book/{book}', [BibleController::class, 'getChaptersFromBook']);
Route::get('/chapter/{chapter}', [BibleController::class, 'getSectionsFromChapter']);

