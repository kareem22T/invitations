<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/invitation/{inviter_name}/{inviter_id}", [MainController::class, "indexInvitation"]);
Route::get("/get-inviters", [MainController::class, "getInviters"]);
Route::post("/vote", [MainController::class, "vote"])->name("invitation.vote");