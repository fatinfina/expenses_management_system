<?php

namespace App\Http\Controllers\expense;

use App\Http\Controllers\Controller;
use App\Models\budget\budgetModel;
use Illuminate\Http\Request;
use App\Models\expense\expenseModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ExpenseController extends Controller
{
    //
    public function index(){

        $current_date = now()->format('Y-m-d');
        $today = expenseModel::where('expense_date',$current_date)->get();
        // $today = expenseModel::all();
        $total_today = expenseModel::where('expense_date',$current_date)
        ->sum('expense_price');

        
// dd($total_week);

        return view('expense.todayexpense', [
            "today" => $today,
            "total_today"=> $total_today,
            
        ]);
    }

    public function add(){

        return view('expense.addToday', [

        ]);
    }

    public function store(Request $request){

        $expense= new expenseModel;
        $expense->expense_date= $request->input('expense_date');
        $expense->expense_item= $request->input('expense_item');
        $expense->expense_price= $request->input('expense_price');
        $expense->expense_remark= $request->input('expense_remark');
        $expense->created_at = now();

        $this->validate($request,[
            'expense_date'=>'required',
        ]);

        $expense->save();
        return redirect()->route('expense.index');
        
    }

    public function edit($id){
        $edit_today = expenseModel::where('expense_id',$id)->get();

        return view('expense.editToday', [
           "edit_today"=> $edit_today,

        ]);
    }
    
    public function update(Request $request, $id){

        expenseModel::where('expense_id', $id)
        ->update([
            'expense_date'=> $request->input('expense_date'),
            'expense_item'=> $request->input('expense_item'),
            'expense_price'=> $request->input('expense_price'),
            'expense_remark'=> $request->input('expense_remark'),
            'updated_at' => now()
        ]);
        
        return redirect()->route('expense.index');

    }

    public function delete($id){

        expenseModel::where('expense_id',$id)->delete();
        return redirect()->back();

    }

    public function week(){

        $week = expenseModel::whereBetween('expense_date',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
        ->orderBy('expense_date', 'ASC')
        ->get();

        $total_week = expenseModel::whereBetween('expense_date',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
        ->sum('expense_price');
        // dd($week);

        return view('expense.weekexpense', [
            "week"=> $week,
            "total_week"=> $total_week,

        ]);
    }

    public function month(){

        $month = expenseModel::whereBetween('expense_date',[Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
        ->orderBy('expense_date', 'ASC')
        ->get();

        $total_month = expenseModel::whereBetween('expense_date',[Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
        ->sum('expense_price');

        $budget_month = budgetModel::where('budget_month',Carbon::now()->month)
        ->value('budget_expect');

        return view('expense.monthexpense', [
            "month"=> $month,
            "total_month"=> $total_month,
            "budget_month"=> $budget_month,

        ]);
    }

    public function addBudget(){

        return view('budget.addBudget', [

        ]);
    }

    public function storebudget(Request $request){

        $budget= new budgetModel;
        $budget->budget_expect= $request->input('budget_expect');
        $budget->budget_month= $request->input('budget_month');
        $budget->created_at = now();

        $budget->save();
        return redirect()->route('home');
        
    }
}
