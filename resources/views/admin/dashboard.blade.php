@extends('layout.admin')

@section('body')
<div class="dashboard-page">
    <div class="heading">
        <h3>Date : {{$mytime}}</h3>
        <h4 class="left-bar">Home <i class="fas fa-angle-right"></i> Dashboard</h4>
        <h2 class="right-bar">Dashboard </h2>
    </div> 
    <div class="dash-board">
        <div class="weekly-orders ">
            <i class="far fa-chart-bar icon-order"></i><br>
            Daily Sales 
            <h1>{{$orders}} Orders</h1>
            <h1>{{$sum}} </h1>
        </div>
        <div class="weekly-sales ">
            <i class="fas fa-rupee-sign icon-order"></i><br>
            Orders on {{$month}}
            <h1>{{$month_orders}} Orders</h1>
        </div>
        <div class="column">
            <div class="totalEmployees">
              <i class="fas fa-users icon-order"></i><br>
              BEST Sales
              <h2>{{$max_name}}</h2>
            </div>
            <div class="todayOrder">
              <i class="fas fa-shopping-cart icon-order"></i><br>
              Todays Order 
              <h2>{{$today_orders}}</h2>
            </div>
        </div>
    </div>
</div>
@endsection