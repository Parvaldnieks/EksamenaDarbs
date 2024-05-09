<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::get('/', function () {
    return view('main');
});


Route::get("/expenses", [ExpenseController::class, "expensesIndex"]);
Route::get("/create-expenses", [ExpenseController::class, "expensesCreate"]);
Route::post("/expensesStore", [ExpenseController::class, "expensesStore"]);
Route::get("/expensesTotal", [ExpenseController::class, "expensesTotalAmount"]);
Route::get("/show/{id}", [ExpenseController::class, "expensesShow"]);
Route::post("/expensesDestroy/{id}", [ExpenseController::class, "expensesDestroy"]);

Route::get("/income", [IncomeController::class, "incomeIndex"]);
Route::get("/create-income", [IncomeController::class, "incomeCreate"]);
Route::post("/incomeStore", [IncomeController::class, "incomeStore"]);
Route::get("/incomeTotal", [IncomeController::class, "incomeTotalAmount"]);
Route::post("/incomeDestroy/{id}", [IncomeController::class, "incomeDestroy"]);