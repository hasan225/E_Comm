@extends('master')
@section('content')

<div class="container mt-5" style="height:62vh;margin-top:12% !important">

    <div class="row mt-5">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" alt="" height="350px">
        </div>
        <div class="col-sm-6">
            <h2>{{$product['name']}}</h2>
            <h4>{{$product['category']}}</h4>
            <h3>Price: {{$product['price']}}</h3>
            <p>{{$product['description']}}</p>
            <button class="btn btn-outline-primary">Add to Cart</button>
            <button class="btn btn-outline-success">Buy Now</button><br>
            <h5><a href="/" class="btn btn-outline-info mt-5">Go to home Page</a></h5>

        </div>
    </div>

  </div>
@endsection
