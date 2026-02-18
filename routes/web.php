<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/* Route::get('/employee', function () {
    return view('employee.index', [EmployeeController::class,'index']);
});

Route::get('/employee/create', function () {
    return view('employee.create', [EmployeeController::class,'create']);
}); */

Route::resource('employee', EmployeeController::class);
