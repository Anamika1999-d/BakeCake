@extends('layout.layout')

@section('content')
<head>
</head>
<body>
    <div class="orderpage">
    <div class="bill-section col-sm-10">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Cake</th>
                <th scope="col">Amount</th>
              </tr>
            </thead>
            @foreach($item as $product)
            <tbody>
              <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td><img src="/storage/pic1/{{$product->pic1}}" alt="..." width='150px' height='150px'></td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>

              </tr>
            </tbody>
            @endforeach
            <tbody>
              <tr>
                <th scope="row"></th>
                <th>Grand Total : </th>
                <th></th>
                <th>{{$total}}</th>
                
              </tr>
            </tbody>
        </table>
      </div>
    <form class="form-horizontal" action="/order_proceed" method="post">
    @csrf
        <div class="form-group col-sm-10">
          <label class="control-label col-sm-2" for="address">Address:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name='address' id="address" required placeholder="Enter address">
          </div>
        </div>
        <div class="form-group col-sm-10">
           <label class="control-label col-sm-2" for="city">city:</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" name='city' id="city" required placeholder="City">
           </div>
        </div>
        <div class="form-group col-sm-10">
          <label class="control-label col-sm-2" for="state">State:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name='state' id="state" required placeholder="State">
          </div>
        </div>
        <div class="form-group col-sm-10">
          <label class="control-label col-sm-2" for="pin_no">Pin No:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name='pin_no' id="pin_no" required placeholder="PIN NO">
          </div>
        </div>
        <div class="form-group col-sm-10">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Proceed</button>
          </div>
        </div>
    </form>
    </div>
</body>
@endsection