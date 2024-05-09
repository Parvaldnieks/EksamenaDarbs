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

    public function expensesShow($id) {
        $expenses = Expense::find($id);

        return view("expenses.show", ["expenses" => $expenses]);
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

    public function expensesTotalAmount() {
        $expensesTotal = Expense::expenseSum();
        
        return view("expensesTotal", ["expensesTotal" => $expensesTotal]);
    }

    public function expensesDestroy($id) {
        $expenses = Expense::findOrFail($id);
        $expenses->delete();

        return redirect("/expenses");
    }
}