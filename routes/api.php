<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseTestController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DummyDataController;
use App\Http\Controllers\CheckUsernameController;


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

//endPoint to check a GET response in POSTMAN
Route::get('/test-connections', [DatabaseTestController::class, 'testConnection']);
Route::post('/create-account', [AccountController::class, 'create']);
Route::post('dummy-accounts', [DummyDataController::class, 'createAccounts']);
Route::get('/check-username/{username}', [AccountController::class, 'checkUsername']);
Route::get('/check-email/{email}', [AccountController::class, 'checkEmail']);
// Route::get('/api/check-username/{username}', [CheckUsernameController::class, 'checkUsername']);
