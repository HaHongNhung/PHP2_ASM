@extends('Component.main')
@section('content')
<style>
    .product-title {
        font-size: 2em;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .product-price {
        font-size: 1.5em;
        color: #b12704;
        margin-bottom: 20px;
    }
    .product-rating {
        margin-bottom: 20px;
    }
    .product-description {
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .product-features, .product-specifications {
        margin-top: 20px;
    }
    .review {
        margin-bottom: 20px;
    }
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-3 ms-3">
            <img src="{{$productOne['image']}}" class="img-fluid" alt="Product Image">
        </div>
        <div class="col-md-6">
            <div class="product-title">{{$productOne['name']}}</div>
            <div class="product-price">{{$productOne['price']}} VND</div>
            <div class="product-rating">
                <span class="badge badge-success">4.5 stars</span> (150 reviews)
            </div>
            <div class="product-description">
                {{$productOne['description']}}
            </div>
            <div class="count-product">
                <h2>Số lượng mua</h2>
                <input type="number" class="form-control boder-3 mb-3">
            </div>
            
            <button class="btn btn-primary btn-lg">Add to Cart</button>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
@section('title')
    name
@endsection