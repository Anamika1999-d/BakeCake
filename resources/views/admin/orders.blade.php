@extends('layout.admin')

@section('body')
<head>
</head>
<body>
    <div class="noti">
        <table class="table table-striped" width="100%">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Order No</th>
              <th scope="col">img</th>
              <th scope="col">Cake</th>
              <th scope="col">Date  of order</th>
              <th scope="col">price</th>
              <th scope="col">status</th>
            </tr>
          </thead>
          <tbody>
          @foreach($orders as $item)
            <tr>
              <th scope="row"></th>
              <td>{{$item->order_no}}</td>
              <td><img src="/storage/pic1/{{$item->pic1}}" alt="..." width='150px' height='150px'></td>
              <td>{{$item->name}}</td>
              <td>{{$item->created_at}}</td>
              <td>{{$item->price}}</td>
              <td><a href="/delivered/{{$item->id}}" class="btn btn-success">delivered</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</body>
@endsection