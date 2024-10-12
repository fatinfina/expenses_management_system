<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\expense\expenseModel;
use App\Models\budget\budgetModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class homeController extends Controller
{
    //
    public function index(){
        
        $budget_month = budgetModel::where('budget_month',Carbon::now()->month)
        ->value('budget_expect');
        
        $total_month = expenseModel::whereBetween('expense_date',[Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
        ->sum('expense_price');

        $total_week = expenseModel::whereBetween('expense_date',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
        ->sum('expense_price');

        $total_today = expenseModel::where('expense_date',now()->format('Y-m-d'))
        ->sum('expense_price');

        // dd($budget_month);

        return view('home', [
            "total_month"=> $total_month,
            "budget_month" => $budget_month,
            "total_today"=> $total_today,
            "total_week"=> $total_week,



        ]);
    }
}
