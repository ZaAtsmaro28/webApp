<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(){
        $data =  Transaction::with('master_charts')->with('categories')->select(
            DB::raw('coa_code, SUM(debit) AS sum_debit, SUM(credit) AS sum_credit')
            )->groupBy('categories.category_name')->get();

        dd($data);
        return view('report.index');
    }


}
