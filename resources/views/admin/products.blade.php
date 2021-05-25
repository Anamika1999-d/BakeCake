@extends('layout.admin')

@section('body')
<head>
    <link rel="stylesheet" href="css/products.css">
</head>
<body>
    <div class="item-page">
        <div class="headline">
            Home<i class="fas fa-angle-right"></i>Products
        </div>
        <div class="mainpage">
            <div class="topic">
                <div class=" totalproducts">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col"><h3>Total No. Of Cake</h3></th>
                          <th scope="col">{{$total}}</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th ><h4>Chocolate Cake</h4></th>
                          <td>{{$choco}}</td>
                        </tr>
                        <tr>
                          <th ><h4>Fruit Cake</h4></th>
                          <td>{{$fruit}}</td>
                        </tr>
                        <tr>
                          <th ><h4>Fruit and nut Cake</h4></th>
                          <td>{{$Fruit_and_nut}}</td>
                        </tr>
                        <tr>
                          <th ><h4>milk Cake</h4></th>
                          <td>0</td>
                        </tr>
                        <tr>
                          <th ><h4>Vanilla Cake</h4></th>
                          <td>{{$vanilla}}</td>
                        </tr>
                        <tr>
                          <th ><h4>Red valvet Cake</h4></th>
                          <td>{{$Red_velvet}}</td>
                        </tr>
                        <tr>
                          <th ><h4>Dark Forest Cake</h4></th>
                          <td>{{$DF}}</td>
                        </tr>
                        <tr>
                          <th ><h4>Buttterscotch Cake</h4></th>
                          <td>{{$Buttterscotch}}</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <div class="items">
                    <div class="column-1">
                        <div class="item cupcake">
                            <h5><img src="icon/cupcake.jpeg" alt="..." width="60px" height="60px">Total Cup cake</h5>
                        </div>
                        <div class="item donut">
                            <h5><img src="icon/donut.png" alt="..." width="60px" height="60px">Total Donut</h5>
                        </div>
                        <div class="item Corissant">
                            <h5><img src="icon/Corissant.png" alt="..." width="60px" height="60px">Total Corissant</h5>
                        </div>
                    </div>
                    <div class="column-2">
                        <div class="item Macrons">
                            <h5><img src="icon/Macrons.png" alt="..." width="60px" height="60px">Total Macrons</h5>
                        </div>
                        <div class="item Pastry">
                            <h5><img src="icon/Pastry.jpeg" alt="..." width="60px" height="60px">Total Pastry</h5>
                        </div>
                        <div class="item Financier">
                            <h5><img src="icon/indiandessert.png" alt="..." width="60px" height="60px">Total Indian Dessert</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itens-list">
            <table class="table">
                <thead>
                    <tr>
                        <th><a href="/addProducts" class="btn btn-primary">ADD PRODUCTS</a></th>
                    </tr>
                    <tr>
                      <th scope="col">Sno</th>
                      <th scope="col">Cake</th>
                      <th scope="col">Picture</th>
                      <th scope="col">Category</th>
                      <th scope="col">Price</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($show as $item)
                    <tr>
                      <td>{{$loop->index+1}}</td>
                      <th>{{$item->name}}</th>
                      <td><img src="/storage/pic1/{{$item->pic1}}" alt="..." width="100px" height="100px"></td>
                      <td>{{$item->Category}}</td>
                      <td>{{$item->priceForhalfkg}}</td>
                      <td><a href="" class="btn btn-success">View Detail</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@endsection