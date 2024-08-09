<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaisController;


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


Route::prefix("auth") -> group(function () {
    Route::post("login", [AuthController::class, "login"]);
    Route::post("register", [AuthController::class, "register"]) -> middleware("api");
    Route::post("logout", [AuthController::class, "logout"]) -> middleware("api");;
    Route::post("refresh", [AuthController::class, "refresh"]) -> middleware("api");;
    Route::post("me", [AuthController::class, "me"]) -> middleware("api");;
});



Route::post("/pais", [PaisController::class, "Insertar"])->middleware("auth:api");
Route::get("/pais",[PaisController::class, "Listar"]);