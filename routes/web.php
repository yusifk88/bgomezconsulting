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

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

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

    Route::get("/record",[RecordsController::class, "create"])->name("record.index");


});


require __DIR__ . '/auth.php';
