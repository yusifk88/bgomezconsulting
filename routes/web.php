<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecordsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        "user" => auth()->user(),
    ]);
});


Route::get("/home/{lng}", function ($lng) {
    $langList = ['es', 'en'];
    if (in_array($lng, $langList)) {
        session()->put(['lang' => $lng]);
    }
    return redirect()->back();

})->name("changeLanguage");


Route::get("/services", function () {
    return Inertia::render("Services");
})->name("services");

Route::get("/pricing", function () {
    return Inertia::render("Pricing");
})->name("pricing");

Route::get("/resources", function () {
    return Inertia::render("Resources");
})->name("resources");


Route::get("/about", function () {
    return Inertia::render("About");
})->name("about");

Route::get("/contact", function () {
    return Inertia::render("Contact");
})->name("contact");

Route::group(["middleware" => ["auth:sanctum", "verified"]], function () {

    Route::get('/dashboard', [RecordsController::class,"dashboard"])->name('dashboard');

    /**
     * accounts routes
     */

    Route::post("/account", [AccountsController::class, "store"])->name("account.store");
    Route::post("/account/spouse", [AccountsController::class, "saveSpouse"])->name("account.storeSpouse");
    Route::post("/account/dependant", [AccountsController::class, "saveDependent"])->name("account.storeDependant");
    Route::post("/account/finance", [AccountsController::class, "saveFinance"])->name("account.storeFinance");
    Route::delete("/account/finance/{id}", [AccountsController::class, "deleteFinance"])->name("finance.destroy");

    /**
     * profile routes
     */

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete("/dependant/{id}",[AccountsController::class,"deletedDependant"])->name("dependant.destroy");

    /**
     * records routes
     */

    Route::get("/records",[RecordsController::class, "index"])->name("records.index");
    Route::get("/records/new",[RecordsController::class, "create"])->name("records.new");
    Route::get("/records/{id}",[RecordsController::class, "show"])->name("records.show");
    Route::post("/records",[RecordsController::class, "store"])->name("records.store");
    Route::get("/file/{id}/download",[RecordsController::class, "downloadFile"])->name("records.downloadFile");
    Route::post("files/{id}/add",[RecordsController::class, "addFile"])->name("file.add");
    Route::post("records/{id}",[RecordsController::class, "update"])->name("records.update");
    Route::delete("/file/{id}/delete",[RecordsController::class, "destroyFile"])->name("file.delete");
    Route::delete("/record/{id}/delete",[RecordsController::class, "destroy"])->name("record.delete");


});


require __DIR__ . '/auth.php';
