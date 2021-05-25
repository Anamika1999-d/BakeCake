@extends('layout.layout')

@section('content')
<head>
    <link rel="stylesheet" href="css/search.css">
</head>
<body>
    <div class="searchpage">
        <div class="sidenavbar col-sm-2">
            Sort Item:
            <form action="">
                <input type="checkbox" name="" id="">kdvdjfvkdjvkjdfvjd
                <input type="checkbox" name="" id="">kdvdjfvkdjvkjdfvjd
                <input type="checkbox" name="" id="">kdvdjfvkdjvkjdfvjd
                <input type="checkbox" name="" id="">kdvdjfvkdjvkjdfvjd
                <input type="checkbox" name="" id="">kdvdjfvkdjvkjdfvjd
                <input type="checkbox" name="" id="">kdvdjfvkdjvkjdfvjd
            </form>
        </div>
        <div class="resultpage">
            @foreach($items as $item)
            <div class="item col-sm-3">
                <a href="/detail/{{$item->id}}">
                    <img src="/storage/pic1/{{$item->pic1}}" class="img" alt="...">
                    <h5>{{$item->name}}</h5>
                    <h6>{{$item->price}}</h6>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>
@endsection
