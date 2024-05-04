<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;

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


Auth::routes();
Route::get('/home', [HomeController::class, "index"]);