<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecordsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});


Route::middleware('auth')->group(function () {
    Route::get("/", [RecordsController::class, "dashboard"])->name("dashboard");
    Route::get("/records", [RecordsController::class, "index"])->name("records.index");
    Route::get("/records/{id}", [RecordsController::class, "show"])->name("records.show");
    Route::get("/file/{id}/download",[RecordsController::class, "downloadFile"])->name("records.downloadFile");

    Route::get("/clients",[RecordsController::class, "clients"])->name("records.clients");
    Route::get("/clients/{id}",[RecordsController::class, "client"])->name("records.clients.show");
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__ . '/auth.php';
