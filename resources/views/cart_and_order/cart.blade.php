@extends('layout.layout')

@section('content')
<head>
  <link rel="stylesheet" href="css/cart.css">
</head>
<body>
<div class="cart">
  @if($item=='')
  <img src="img/empty_cart.png" alt="">
  @else
    <a href="/">back to home</a>
    @foreach($item as $product)
    <div class="col-sm-13">
        <div class="row searched-item cart-list">
            <div class="col-sm-5">
                <img src="/storage/pic1/{{$product->pic1}}" alt="..." width='250px' height='250px'>
            </div>
            <div class="col-sm-3">
                <h3>{{$product->name}}</h3>
                
                <h4>weight : {{$product->weight}}</h4>
                <h4>price : {{$product->price}}</h4>
                <h4>Cake Message : {{$product->message}}</h4>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-warning"><a href="remove/{{$product->cart_id}}"> Remove From Cart</a></button> 
            </div>
        </div>
    </div>
    @endforeach
    <br><br>
    <div class="bill-section col-sm-10">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Cake</th>
                <th scope="col">Amount</th>
              </tr>
            </thead>
            @php($total=0)
            @foreach($item as $product)
            <tbody>
              <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                @php($total+=$product->price)
              </tr>
            </tbody>
            @endforeach
            <tbody>
              <tr>
                <th scope="row"></th>
                <th>Grand Total : </th>
                <th>{{$total}}</th>
                
              </tr>
            </tbody>
        </table>
    </div>
    <div class="col-sm-10">
        <button class="btn btn-warning"><a href="/order">Place Order</a></button>
    </div>
    @endif
</div>

</body>

@endsection