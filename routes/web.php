<?php

use App\Http\Controllers\ClientViewController;
use App\Http\Controllers\GreenhouseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('client.index');
});


Route::resource("admin/greenhouses", GreenhouseController::class);

Route::get("/greenhouses", [ClientViewController::class, "greenhouses"]);
Route::get('/author', function () {
    return view('client.author');
});


Route::get('/admin', function () {
    return view('admin.index');
})->name('mainPage');

Auth::routes([
    'register' => false,
    'reset' => false,
]);
