<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get All Employees
Route::get('employee', [EmployeeController::class, 'getEmployee']);

// Save an Employeee
Route::post('employee', [EmployeeController::class, 'addEmployee']);

// Get Specific Employee
Route::get('employee/{id}', [EmployeeController::class, 'getEmployeeById']);

// Update an Employee
Route::put('employee/{id}', [EmployeeController::class, 'updateEmployee']);

// Delete an Employee
Route::delete('employee/{id}', [EmployeeController::class, 'deleteEmployee']);