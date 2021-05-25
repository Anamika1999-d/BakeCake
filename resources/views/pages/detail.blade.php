@extends('layout.layout')

@section('content')
<head>
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="css/Zoom-main.css">
</head>
<body>
    
    <div class="detailpage">
        <div class="prod col-sm-12">
            <div class="imgdetail col-sm-7">
                <div class="small_img col-sm-2">
                    <div><img src="/storage/pic1/{{$product->pic1}}" class="img" weight='50px' height='50px' alt=""></div>
                    <div><img src="/storage/pic2/{{$product->pic2}}" class="img" weight='50px' height='50px' alt=""></div>
                    <div><img src="/storage/pic3/{{$product->pic3}}" class="img" weight='50px' height='50px' alt=""></div>
                    
                </div>
                <div class="show col-sm-5" href="/storage/pic1/{{$product->pic1}}">
                    <img src="/storage/pic1/{{$product->pic1}}"  weight='400px' height='350px' id="show-img">
                </div>
            </div>
            <div class="productdetail col-sm-5 ">
                <h2>{{$product->name}}</h2>
                <form action="/AddToCart" method="post">
                    @csrf
                    <h5>Select:</h5>
                    <label class="radio">
                        <input type="radio" name="price" value="{{$product->priceForhalfkg}}">For 0.5Kg : {{$product->priceForhalfkg}}
                        <input type="hidden" value='0.5' name='weight'>
                    </label>
                    <label class="radio">
                        <input type="radio" name="price" value="{{$product->priceFor1kg}}">For 1Kg : {{$product->priceFor1kg}}
                        <input type="hidden" value='1' name='weight'>
                    </label>
                    <label class="radio">
                        <input type="radio" name="price" value="{{$product->priceFor1halfkg}}">For 1.5 Kg : {{$product->priceFor1halfkg}}
                        <input type="hidden" value="1.5"name="weight">
                    </label>
                    <label class="radio">
                        <input type="radio" name="price" value="{{$product->priceFor2kg}}">For 2 Kg : {{$product->priceFor2kg}}
                        <input type="hidden" value="2"name="weight">
                    </label>
                    <br>
                    <h5>Cake Message</h5>
                    <input type="text" name="message">
                     <br><br>
                    <input type="hidden" value='{{$product->id}}' name='productID'>
                    <button class="btn btn-primary" type='Submit'>Add to Cart</button>
                </form>
                <br>
                <form action="/add_to_wishlist" method="post">
                @csrf
                   <input type="hidden" value='{{$product->id}}' name='productID'>
                   <button class="btn btn-success" type="submit"> Add to Wishlist</a></button>
                </form>
            </div>
        </div>
        <div class='detail col-sm-12'>
            <h5>Product Detail</h5>
            <h7>{{$product->detail}}</h7> 
        </div>
        <div>
            <h3> Delivery Information </h3>
            <ul>
                <li>All orders will be delivered between 9 AM and 9 PM.</li>
                <li>Every cake we offer is handcrafted and since each chef has his/her own way of baking and designing a cake, there might be slight variation in the product in terms of design and shape.</li>
                <li>The chosen delivery time is an estimate and depends on the availability of the product and the destination to which you want the product to be delivered.</li>
                <li>Since cakes are perishable in nature, we attempt delivery of your order only once. The delivery cannot be redirected to any other address.</li>
                <li>This product is hand delivered and will not be delivered along with courier products.</li>
            </ul>
        </div>
        <div>
            <h3>Care Instructions</h3>
            <ul>
                <li>Store cream cakes in a refrigerator. Fondant cakes should be stored in an air conditioned environment.</li>
                <li>Slice and serve the cake at room temperature and make sure it is not exposed to heat.</li>
                <li>Use a serrated knife to cut a fondant cake.</li>
                <li>Sculptural elements and figurines may contain wire supports or toothpicks or wooden skewers for support.</li>
                <li>Please check the placement of these items before serving to small children.</li>
                <li>The cake should be consumed within 24 hours.</li>
            </ul>
        </div>

        <h4>Enjoy your cake!</h4>
        <div class="other">
            <h5>you may like</h5>

        </div>
    </div>
    <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
    <script type="text/javascript" src="{{ URL::asset('js/zoom-images.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/zoom-main.js') }}"></script>

    <script src="js/zoom-images.js"></script>
    <script src="js/zoom-main.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
@endsection
