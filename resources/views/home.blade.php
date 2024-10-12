@extends('layouts.layout')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Budget Card -->
          <div class="col-xxl-5 col-md-6">
            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Option</h6>
                  </li>

                  <li><a class="dropdown-item" href="{{route('expense.add_Budget')}}">Add New Budget</a></li>
                  <li><a class="dropdown-item" href="#">Delete</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Budget <span>| This Month</span></h5>
                </a>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                  </div>
                  <div class="ps-3">
                    @if(isset($budget_month))
                    <h6>RM {{$budget_month}}</h6>
                    @else
                    <h6>-</h6>
                    <span class="text-muted small pt-2 ps-1">Please add new budget</span>
                    @endif

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Budget Card -->
          <!-- Month Card -->
          <div class="col-xxl-5 col-md-6">
            <div class="card info-card revenue-card" href="#">

              <div class="card-body">
                <h5 class="card-title">Total Spend <span>| This Month</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cash-coin"></i>
                  </div>
                  <div class="ps-3">
                    <h6>RM {{$total_month}}</h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Month Card -->

          <!-- Week Card -->
          <div class="col-xxl-5 col-md-6">
            <div class="card info-card revenue-card" href="#">

              <div class="card-body">
                <h5 class="card-title">Total Spend <span>| This Week</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cash-coin"></i>
                  </div>
                  <div class="ps-3">
                    <h6>RM {{$total_week}}</h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Week Card -->

          <!-- today Card -->
          <div class="col-xxl-5 col-md-6">
            <div class="card info-card revenue-card" href="#">

              <div class="card-body">
                <h5 class="card-title">Total Spend <span>| Today</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cash-coin"></i>
                  </div>
                  <div class="ps-3">
                    <h6>RM {{$total_today}}</h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Today Card -->

        </div>
      </div><!-- End Left side columns -->

    </div>
  </section>

</main><!-- End #main -->
@endsection