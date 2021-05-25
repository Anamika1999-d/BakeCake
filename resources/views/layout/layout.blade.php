<?php
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Session;
$total=0;
if(Session::has('user'))
{
  $total=productController::cartItem();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>E-comm project</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="img/logo.jpg" alt="" width ="100px" height="50px"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="navbar-nav me-auto mb-2 mb-lg-0">
                <form class="d-flex" action="/search" method="get">
                  <input class="form-control me-2 search" type="search" name="search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
              @if(Session::has('user'))
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">{{Session::get('user')['name']}}</button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                @if(Session::get('user')['name']=='admin')
                   <li role="presentation"><a role="menuitem" tabindex="-1" href="/dashboard">My Account</a></li> 
                @else
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="/MyAccount">My Account</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="/wishlist">My Wishlist</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="/order_list">My orders</a></li>
                @endif
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="/logout">Log Out</a></li>
                </ul>
              </div>
              @else
              <button class="btn btn-outline-primary"> <a href="/login"> LOGIN</a></button>
              <button class="btn btn-outline-primary"> <a href="/register"> Register</a></button>
              @endif
              <a class="nav-link" href="/cart">Cart({{$total}})</a>
            </div>
          </div>
        </nav>
    </header>

    @yield('content')
    <footer>
     
    </footer>

</body>
</html>