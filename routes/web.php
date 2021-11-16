<?php

use App\Exports\PaymentsExport;
use App\Http\Controllers\ClientController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/", [ClientController::class, "index"])->name("client.index");
Route::get("/q/", [ClientController::class, "search"])->name("client.search");

require __DIR__ . '/auth.php';
