@extends('layouts.layout')

@section('content')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Add Budget</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Layouts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Form</h5>

          <!-- Vertical Form -->
          <form class="row g-3" id="addBudget" method="POST" action="{{route('expense.store_Budget')}}">
            @csrf
            <div class="col-12">
              <label for="budget_expect" class="form-label">Budget (RM)</label>
              <input type="text" class="form-control" id="budget_expect" name="budget_expect" required>
            </div>

            <div class="col-12">
              <label for="month" class="form-label">Month</label>
              <div class="col-12">
                <select class="form-select" id="budget_month" name="budget_month" aria-label="month">
                  <option selected>Open this select menu</option>
                  <option value="01">January</option>
                  <option value="02">February</option>
                  <option value="03">March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select>
              </div>
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