@extends('layout.layout')

@section('content')
<head>
</head>
<body>
    <div class="orderpage">
    <div class="bill-section ">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Sno</th>
                <th scope="col"></th>
                <th scope="col">Cake</th>
                <th scope="col">Amount</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            @foreach($item as $product)
            <tbody>
              <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td><img src="/storage/pic1/{{$product->pic1}}" alt="..." width='150px' height='150px'></td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->status}}</td>
                <td><button class="btn btn-success"><a href="/">Track Order</a></button></td>
              </tr>
            </tbody>
            @endforeach
        </table>
      </div>
@endsection
