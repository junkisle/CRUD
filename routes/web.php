<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDController;

Route::get('/', [CRUDController::class, 'index']);
Route::get('/dashboard', [CRUDController::class, 'classDashboard'])->name('dashboard');
Route::get('/form', [CRUDController::class, 'openForm'])->name('form');
Route::post('/form/insert', [CRUDController::class, 'insertData'])->name('insert');

Route::delete('/dashboard/{id}', [CRUDController::class, 'deleteData'])->name('deleteFromID');

Route::get('/editForm/{id}', [CRUDController::class, 'editData'])->name('editForm');
Route::post('/editForm/{id}', [CRUDController::class, 'updateData'])->name('editForm');