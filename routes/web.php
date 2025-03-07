<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDController;

Route::get('/', [CRUDController::class, 'index']);
Route::get('/dashboard', [CRUDController::class, 'classDashboard'])->name('dashboard');
Route::get('/form', [CRUDController::class, 'openForm'])->name('form');
Route::post('/form/insertUser', [CRUDController::class, 'insertData'])->name('insertUser');

Route::delete('/dashboard/{id}', [CRUDController::class, 'deleteData'])->name('deleteFromID');

Route::get('/editForm/{id}', [CRUDController::class, 'editData'])->name('editForm');
Route::put('/editForm/{id}', [CRUDController::class, 'updateData'])->name('editForm');

Route::get('/Notes/{id}', [CRUDController::class, 'addViewNotes'])->name('viewNotes');
Route::post('/Notes/{id}', [CRUDController::class, 'addUserNotes'])->name('addNotes');