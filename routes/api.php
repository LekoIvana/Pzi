<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\KorisnikController;


Route::get('/employees',[EmployeesController::class, 'index']);

Route::post('/save',[EmployeesController::class, 'store']);

Route::put('/update/{id}',[EmployeesController::class, 'update']);

Route::delete('/delete/{id}',[EmployeesController::class, 'destroy']);

//-----------------

Route::get('/korisnik',[KorisnikController::class, 'index']);

Route::post('/save',[KorisnikController::class, 'store']);

Route::put('/update/{id}',[KorisnikController::class, 'update']);

Route::delete('/delete/{id}',[KorisnikController::class, 'destroy']);






/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
