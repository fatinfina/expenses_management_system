<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\expense\ExpenseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//main
// Route::get('/login', function () {
//     return view('login');
// });

// 
Route::get('/', [homeController::class, 'index'])->name('home');


Route::group(['prefix'=>'/expenses', 'as'=> 'expense.'], function (){
    Route::get('/todayexpense', [ExpenseController::class, 'index'])->name('index');
    Route::get('/addexpense', [ExpenseController::class, 'add'])->name('add_Expense');
    Route::post('/storeexpense', [ExpenseController::class, 'store'])->name('store_Expense');
    Route::get('/editexpense/{id}', [ExpenseController::class, 'edit'])->name('edit_Expense');
    Route::get('/updateexpense/{id}', [ExpenseController::class, 'update'])->name('update_Expense');
    Route::get('/deleteexpense/{id}', [ExpenseController::class, 'delete'])->name('delete_Expense');
    Route::get('/weeklyexpense', [ExpenseController::class, 'week'])->name('weekly_Expense');
    Route::get('/monthlyexpense', [ExpenseController::class, 'month'])->name('monthly_Expense');
    Route::get('/addbudget', [ExpenseController::class, 'addBudget'])->name('add_Budget');
    Route::post('/storebudget', [ExpenseController::class, 'storebudget'])->name('store_Budget');

});
