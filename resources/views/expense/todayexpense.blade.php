@extends('layouts.layout')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Expenses</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Expenses</a></li>
        <li class="breadcrumb-item active">Today</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="col-lg-12">
      <div class="row">

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
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
        </div><!-- End Revenue Card -->

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>

              <!-- Table with stripped rows -->
              <!-- <a href="#"><button type="button" class="btn btn-secondary"><i class="bi bi-plus-circle me-1"></i>New Booking</button></a> -->
              <a href="{{route('expense.add_Expense')}}"><button type="button" class="btn btn-secondary"><i class="bi bi-plus"></i>new item</button></a>
              <table class="table datatable" id="today_datatable">
                <thead>

                  <tr>
                    <th>Date</th>
                    <th>Items</th>
                    <th>Remarks</th>
                    <th>Price (RM)</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($today as $data)
                  <tr>
                    <td>{{$data->expense_date}}</td>
                    <td>{{$data->expense_item}}</td>
                    <td>{{$data->expense_remark}}</td>
                    <td>{{$data->expense_price}}</td>
                    <td>
                    <a href="{{route('expense.edit_Expense', ['id'=> $data->expense_id])}}"><button type="button" class="btn btn-primary"><i class="bi bi-pencil"></i></button></a>
                      <a href="{{route('expense.delete_Expense', ['id'=> $data->expense_id])}}"><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>

              <!-- End Table with stripped rows -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection