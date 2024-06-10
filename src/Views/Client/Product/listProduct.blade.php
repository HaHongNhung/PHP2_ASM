@extends('Component.main')
@section('content')
<div class="container pt-5">
    <div class="row pt-3">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h3 class="card-title fs-1">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['excerpt'] }}</p>
                        <p class="card-text text-danger"><strong>${{ $product['price'] }}</strong></p>
                        <a href="" class="btn btn-primary">Buy Now</a>
                        <a href="{{url('products/detail/')}}{{$product['id']}}" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
@endsection
@section('title')
    Products
@endsection