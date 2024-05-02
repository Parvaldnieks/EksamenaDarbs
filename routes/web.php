<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;

Route::get('/', function () {
    return view('main');
});


Route::get("/expenses", [ExpenseController::class, "expensesIndex"]);
Route::get("/create-expenses", [ExpenseController::class, "expensesCreate"]);
Route::post("/store", [ExpenseController::class, "expensesStore"]);
Route::get("/totalAmount", [ExpenseController::class, "expensesTotalAmount"]);
Route::get("/show/{id}", [ExpenseController::class, "expensesShow"]);


Route::get("/income", [IncomeController::class, "incomeIndex"]);
// Route::get("/create-income", [IncomeController::class, "incomeCreate"]);
// Route::post("/store", [IncomeController::class, "incomeStore"]);