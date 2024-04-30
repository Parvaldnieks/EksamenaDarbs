<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function incomeIndex() {
        $income = Income::all();
            
        return view("income.income", ["income" => $income]);
    }

    public function incomeCreate() {
        return view("income.create-income");
    }

    public function incomeStore(Request $request) {
        $income = new Income();

        $income->salary = $request->salary;
        $income->save();

        return redirect("/income");
    }
}