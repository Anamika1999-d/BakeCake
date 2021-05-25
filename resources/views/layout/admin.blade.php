<?php
use App\Http\Controllers\AdminController;
$count = DB::table('orders')
        ->join('products', 'orders.product_id','=','products.id')
        ->where('orders.status','pending')
        ->select('products.*','orders.id as order_id','orders.*')
        ->count();
$total = DB::table('orders')
        ->join('products', 'orders.product_id','=','products.id')
        ->where('orders.status','out for delivery')
        ->select('products.*','orders.id as order_id','orders.*')
        ->count();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/adminpage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>E-comm project</title>
</head>
<body>
    <!-- <script>
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }
        
        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("main").style.marginLeft = "0";
        }
    </script> -->
    <div id="mySidenav" class="sidenav">
      <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
      <a href="#"></a>
      <a href="/dashboard">Dashboard</a>
      <a href="/notification"><i class="fas fa-bell"></i> Notification ({{$count}})</a>
      <a href="/orders_made"><i class="fas fa-bell"></i>Orders ({{$total}})</a>
      <a href="/chart-graph"><i class="fas fa-chart-line"></i>Chart & Graph</a>
      <a href="/products">Products</a>
      <a href="/EmployeeDetail">Employee Detail</a>
      <a href="#">Make Changes</a>
    </div>
    <!-- <span onclick="openNav()">open</span> -->
<div class="main">
    <nav class="navbar">
      <div class="navbar-nav">
        <form class="d-flex">
          <input class="form-control me-4 search-box" type="search" name="search">
          <button class="btn btn-outline-success search-button" type="submit">Search</button>
        </form>
      </div>   
      <button class="btn btn-default notification" type="button" ><i class="fas fa-bell"></i></button>
      @if(Session::has('user'))
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle user" type="button" id="menu1" data-toggle="dropdown">{{Session::get('user')['name']}}</button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" class="dropdown-option" tabindex="-1" href="/logout">Log Out</a></li>
        </ul>
      </div>
      @endif
    </nav>
    @yield('body')
    
</div>

</body>
</html>