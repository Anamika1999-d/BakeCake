@extends('layout.layout')

@section('content')
<head>
 <link rel="stylesheet" href="css/wishlist.css">
</head>
<body>
    <div class="wishlist">
        @foreach($items as $item)
        <div class="item col-sm-12">
            <div class="col-sm-5">
                <img src="/storage/pic1/{{$item->pic1}}" alt="..." width='250px' height='250px'>
            </div>
            <div class="col-sm-4">
               <h3>{{$item->name}}</h3> 
                {{$item->detail}}
            </div>
            <div class="col-sm-3">
                <a href="/remove-wishlist/{{$item->wishlist_id}}" class="btn btn-success">Remove from Wishlist</a>
            </div>

        </div>
        @endforeach

    </div>
</body>
@endsection