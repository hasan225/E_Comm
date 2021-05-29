@extends('master')
@section('content')

<div class="container mt-5" style="height:62vh;margin-top:9% !important">

    <div class="row mt-5">
        <div class="col-sm-12 col-md-6">
            <img src="{{$product['gallery']}}" alt="" height="350px">
        </div>
        <div class="col-sm-12 col-md-6" style="margin-bottom:100px !important">
            <h2>{{$product['name']}}</h2>
            <h4>{{$product['category']}}</h4>
            <h3>Price: {{$product['price']}}</h3>
            <p>{{$product['description']}}</p>
            <form action="/add_to_cart" method="post">
                @csrf
                 <input type="hidden" name="product_id" value="{{$product['id']}}">
                 <button class="btn btn-outline-primary mb-2">Add to Cart</button>
            </form>
            <button class="btn btn-outline-success">Buy Now</button><br>
            <h5><a href="/" class="btn btn-outline-info mt-5">Go to home Page</a></h5>

        </div>
    </div>

  </div>
@endsection
