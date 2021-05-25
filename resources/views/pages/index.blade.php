@extends('layout.layout')

@section('content') 
<head>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
</head>
<body>
<div class="slideshow-container">
  <div class="mySlides fade">
    <img class="image" src="/img/p1.jpg" style="width:100%">
  </div>
  <div class="mySlides fade">
    <img class="image" src="/img/p2.jpg" style="width:100%">
  </div>
  <div class="mySlides fade">
    <img class="image" src="/img/p3.jpg" style="width:100%">
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
    var slideIndex = 0;
    showSlides();
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
    </div>
    <div class='Trending-wrapper'>
        <h3>Popular Cake</h3>
    </div>
    <hr>
    <div class="flavour">
        <h3>Select Your Favourate Flavour</h3>
        <div class='flavour-row1'>
            <div class="text-center">
                <a href="/ChocolateCakelist"><img src="img/Chocolate.jpg" class="img rounded " alt="..."></a>
                <h4>Chocolate</h4>
            </div>
            <div class="text-center">
                <a href="/Butterscotch-list"><img src="img/butterscotch.jpg" class="img rounded " alt="..."></a>
                <h4>Butterscotch</h4>
            </div>
            <div class="text-center">
                <a href="/fruitCake-list"><img src="img/fruit.jpg" class="img rounded" alt="..."></a>
                <h4>Fruit</h4>
            </div>
            <div class="text-center">
                <a href="/Red-VelvetCake-list"><img src="img/red valvet.jpeg" class="img rounded" alt="..."></a>
                <h4>Red Velvet</h4>
            </div>
        </div>
        <div class="flavour-row2">
        <div class="text-center">
                <a href="/VanillaCake-list"><img src="img/vanilla.jpeg" class="img rounded " alt="..."></a>
                <h4>Vanilla</h4>
            </div>
            <div class="text-center">
                <a href="/Fruit-And-Nut-cake-list"><img src="img/fruit and nut.jpeg" class="img rounded " alt="..."></a>
                <h4>Fruit And Nut</h4>
            </div>
            
            <div class="text-center">
                <a href="/Black-Forest-list"><img src="img/black-forest-cake.jpg" class="img rounded" alt="..."></a>
                <h4>Black Forest</h4>
            </div>
            <div class="text-center">
                <a href="/indian-desert"><img src="img/milk.jpeg" class="img rounded" alt="..."></a>
                <h4>Indian Desert</h4>
            </div>
        </div>
    </div>
    <hr>
    <div class="exotic">
        <h3>Exotic Cake</h3>
    </div>
    <hr>
    <div class="birthday">
        <h3>Birthday Cake</h3>
        @foreach($items as $item)
        <div>
           <img src="{{$item->gallery}}" class="img rounded" alt="...">
           <h4>{{$item['name']}}</h4>
        </div>
        @endforeach
    </div>
    <hr>
    <div class="wedding">
        <h3>Wedding Cake</h3>
        @foreach($item1 as $item)
        <div>
           <img src="{{$item->gallery}}" class="img rounded" alt="...">
           <h4>{{$item['name']}}</h4>
        </div>
        @endforeach
    </div>
    <hr>
    <div class="other">
        <h3>Looking for something else?</h3>
        <div class='other-row1'>
            <div class="text-center">
                <a href="/"><img src="img/cupcake.jpg" class="imag rounded " alt="..."></a>
                <h4>Cup Cake</h4>
            </div>
            <div class="text-center">
                <a href="/"><img src="img/croissant.jpeg" class="imag rounded " alt="..."></a>
                <h4>Corissant</h4>
            </div>
            <div class="text-center">
                <a href="/"><img src="img/Pastry.jpg" class="imag rounded" alt="..."></a>
                <h4>Pastry</h4>
            </div>
            
        </div>
        <div class="other-row2">
        <div class="text-center">
                <a href="/"><img src="img/Donut.jpg" class="imag rounded " alt="..."></a>
                <h4>Donut</h4>
            </div>
            <div class="text-center">
                <a href="/"><img src="img/macarons.jpg" class="imag rounded " alt="..."></a>
                <h4>Macrons</h4>
            </div>
            <div class="text-center">
                <a href="/"><img src="img/financier.jpeg" class="imag rounded" alt="..."></a>
                <h4>Financier</h4>
            </div>
        </div>
    </div>
    <div class="tools">
        <h3>*want to purchase baking tools*</h3>
        <div class="tools-row1">
            
        </div>
    </div>
</div>
</body>
@endsection