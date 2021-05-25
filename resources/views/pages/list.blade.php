@extends('layout.layout')

@section('content')
<head>
    <link rel="stylesheet" href="css/list.css">
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Lobster+Two&display=swap" rel="stylesheet">
</head>
<body>
<div class="detailpage">
    <div class="col-sm-2 leftbar">
        Sort:
        <form>
            <input type="checkbox" type="submit" name="" id=""> price:high to low <br>
            <input type="checkbox" type="submit"name="" id=""> price:low to high <br>
            <input type="checkbox" type="submit" name="" id=""> popularity <br>
            
        </form>
        category:
        <form action="/sort" method="get">
        <ol>
            <input type="checkbox" name="sort1" id=""> Rs300-Rs600<br>
            <input type="checkbox" name="sort2" id="">Rs600-Rs1000<br>
            <input type="checkbox" name="sort3" id=""> Rs1000-above<br>
            <input type="submit" class="btn btn-success" value="sort">
        </ol>
        </form>
        
    </div>
    <div class="col-sm-10 page">
        <h5>Result (1-{{$count}})</h5>
        @foreach($product as $item)
        <div class="item col-sm-3">
            <a href="/detail/{{$item->id}}">
               <img src="/storage/pic1/{{$item->pic1}}" alt="..." width="200px" height="200px">
               <p>{{$item->name}}</p>
               <p>{{$item->priceForhalfkg}}</p>
            </a>
        </div>
        @endforeach
    </div>
</div> 
</body>
@endsection