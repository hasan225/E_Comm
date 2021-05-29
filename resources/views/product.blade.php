@extends('master')
@section('content')

<div class=" customProduct" style="height: 115vh">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
      @foreach ($products as $item)
             <div class="carousel-item {{$item['id']==1?'active':''}}">
                 <a href="detail/{{$item['id']}}">
                      <img src="{{$item['gallery']}}" class="d-block w-100" style="height: 800px !important;">
      <div class="carousel-caption d-none d-md-block" style="background: #4c75e66b;border-radius: 20px">
        <h5 >{{$item['name']}}</h5>
        <p >{{$item['description']}}.</p>
      </div>
                 </a>
    </div>
      @endforeach
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container" style="">
    <h2 class="mt-5" id="products">Trending Products</h2>
      @foreach($products as $item)
      <div style="float:left">
         <a href="detail/{{$item['id']}}" style="text-decoration:none">
      <img src="{{$item['gallery']}}" style="height: 100px" class="ms-5 me-5 m-auto text-center">
        <h5 style="width:200px">{{$item['name']}}</h5>
      </a>
        </div>
        @endforeach
      </div>



  </div>
@endsection
