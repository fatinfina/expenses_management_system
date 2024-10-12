@extends('layouts.layout')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Expense</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Expenses</a></li>
          <li class="breadcrumb-item">Today</li>
          <li class="breadcrumb-item active">Edit Expenses</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Form</h5>

                <!-- Vertical Form -->
                <form class="row g-3" id="editExpense" method="POST" action="{{route('expense.update_Expense', ['id'=> $data->expense_id])}}">
                  @csrf
                    <div class="col-12">
                    <label for="expensedate" class="form-label">Date</label>
                    <input type="date" class="form-control" id="expense_date" name="expense_date" required>
                    </div>
                    <div class="col-12">
                    <label for="Item" class="form-label">Item</label>
                    <input type="text" class="form-control" id="expense_item" name="expense_item" placeholder="eg:Groceries">
                    </div>
                    <div class="col-12">
                    <label for="name" class="form-label">Remarks</label>
                    <input type="text" class="form-control" id="expense_remark" name="expense_remark">
                    </div>
                    <div class="col-12">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="expense_price" name="expense_price" placeholder="22.90">
                    </div>
                    
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- Vertical Form -->

                </div>
            </div>
        </div>
        
    </section>
  </main><!-- End #main -->

@endsection