<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(){
        $report = DB::table('transactions')
        ->join('master_charts', 'transactions.coa_code', '=', 'master_charts.coa_code')
        ->join('categories', 'master_charts.category_id', '=', 'categories.id')
        ->selectRaw('
            DATE_FORMAT(transactions.date, "%Y-%m") as month,
            SUM(CASE WHEN categories.category_name = "Salary" THEN transactions.credit ELSE 0 END) AS salary,
            SUM(CASE WHEN categories.category_name = "Other Income" THEN transactions.credit ELSE 0 END) AS other_income,
            SUM(CASE WHEN categories.type = "income" THEN transactions.credit ELSE 0 END) AS total_income,
            SUM(CASE WHEN categories.category_name = "Family Expense" THEN transactions.debit ELSE 0 END) AS family_expense,
            SUM(CASE WHEN categories.category_name = "Transport Expense" THEN transactions.debit ELSE 0 END) AS transport_expense,
            SUM(CASE WHEN categories.category_name = "Meal Expense" THEN transactions.debit ELSE 0 END) AS meal_expense,
            SUM(CASE WHEN categories.type = "expense" THEN transactions.debit ELSE 0 END) AS total_expense
        ')
        ->groupBy('month')
        ->orderBy('month')
        ->get();


        foreach ($report as $row) {
            $row->net_income = $row->total_income - $row->total_expense;
        }

        $data = json_decode(json_encode($report), true);

        return view('report.index', ['data'=>$data]);
    }


}
