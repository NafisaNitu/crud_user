<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">Logo</a>
        <ul class="navbar-nav ml-auto">

            <li class="nav-item"><a href="" class="nav-link">All Product</a></li>
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
        </ul>
    </div>
</nav>


<section class="py-5">
    <div class="container">
        <div class="row">

            @foreach($products as $product)

            <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="{{ asset($product->product_image) }}" alt="" class="card-img-top" style="height: 250px">
                    <div class="card-body">
                        <h3 class="card-title">{{ $product->product_name }}</h3>
                        <p class="">Price: BDT {{ $product->product_price }}</p>
                        <p class=""> Color : {{ $product->color }}</p>
                        <p class=""> Size: {{ $product->size }}</p>
                        <a href="" class="btn btn-outline-warning float-right">View</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<script src="{{ asset('/') }}assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('/') }}assets/js/bootstrap.bundle.js"></script>
</body>
</html>
