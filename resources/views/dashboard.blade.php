@extends('layouts.app')  {{-- If you have a master layout, replace 'app' with your layout name --}}

@section('content')

<div class="container">
    <h2>Dashboard</h2>

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Today's Sales</h5>
                    <p class="card-text">${{ $todaySales }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Yesterday's Sales</h5>
                    <p class="card-text">${{ $yesterdaySales }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">This Month's Sales</h5>
                    <p class="card-text">${{ $thisMonthSales }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Last Month's Sales</h5>
                    <p class="card-text">${{ $lastMonthSales }}</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
