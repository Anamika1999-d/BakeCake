@extends('layout.admin')

@section('body')
<head>
    <link rel="stylesheet" href="css/add-products.css">
</head>
<body>
    <div class="add-product-page">
        <div class="headline">
            <a href="/products">back</a>
            <h4>Home <i class="fas fa-angle-right"></i> Products <i class="fas fa-angle-right"></i> Add Products Detail</h4>
        </div>
        <form action="/product-save" method="post"  enctype="multipart/form-data">
        @csrf
            <div class="product">
                <div class="details">
                <h2>Details</h2>
                    <label for="">Cake name</label><input type="text" name="name" required><br>
                    <label for="">Category</label><input type="text" name="Category" required><br>
                    <label for="">Detail</label><input type="text" name="detail" required><br>
                    <label for="">Qunatity</label><input type="text" name="Qunatity" ><br>
                    <label for="">Price For 0.5 kg</label><input type="number" name="priceForhalfkg" required><br>
                    <label for="">Price For 1 kg</label><input type="number" name="priceFor1kg" required><br>
                    <label for="">Price For 1.5 kg</label><input type="number" name="priceFor1halfkg" required><br>
                    <label for="">Price For 2 kg</label><input type="number" name="priceFor2kg" required><br>
                </div>
                <div class="images">
                    <h2>Images</h2>
                    <label for="">Pic 1</label><input type="file" name="pic1" >
                    <label for="">Pic 2</label><input type="file" name="pic2" >
                    <label for="">Pic 3</label><input type="file" name="pic3" >
                </div>
            </div>
            <button type="submit" class="btn btn-success save">Save</button>
        </form>
    </div>
</body>
@endsection