<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function expensesIndex() {
        $expenses = Expense::all();
            
        return view("expenses.expenses", ["expenses" => $expenses]);
    }

    public function expensesCreate() {
        return view("expenses.create-expenses");
    }

    public function expensesStore(Request $request) {
        $expenses = new Expense();

        $expenses->name = $request->name;
        $expenses->price = $request->price;
        $expenses->save();

        return redirect("/expenses");
    }
}