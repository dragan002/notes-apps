<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrashedNoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/notes', NoteController::class)->middleware(['auth']);

Route::get('/trashed', [TrashedNoteController::class, 'index'])->middleware('auth')->name('trashed.index');

Route::get('/trashed/{note}', [TrashedNoteController::class, 'show'])
    ->withTrashed()
    ->middleware('auth')->name('trashed.show');


Route::put('/trashed/{note}', [TrashedNoteController::class, 'update'])
    ->withTrashed()
    ->middleware('auth')->name('trashed.update');

require __DIR__.'/auth.php';

