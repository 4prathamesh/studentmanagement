<?php
use App\Http\Controllers\EmployeeDocumentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Endpoint to store data
Route::post('/employee/store-documents', [EmployeeDocumentController::class, 'storeData']);

// Endpoint to fetch data (Pass the employee ID in the URL)
Route::get('/employee/{id}/fetch-pan', [EmployeeDocumentController::class, 'fetchPanNo']);

Route::apiResource('products',ProductController::class);