@extends('master')
@section('content')

<div class="custom-product ms-4 ">

    <div class="col-sm-10">

        <div class="trending-wrapper">
            <h4>Result For Products</h4>

            @foreach ($products as $item)

               <div class="row searched-item border-bottom my-4 ">
                   <div class="col-sm-4">
                   <a href="detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" alt="" style="height:150px;width:150px !important">

                   </a>
               </div>

                   <div class="col-sm-4">
                   <a href="detail/{{$item->id}}"  >

                        <div>
                            <h2>{{$item->name}}</h2>
                            <p >{{$item->description}}</p>
                        </div>
                   </a>
               </div>

                   <div class="col-sm-4">
                          <a href="/removecart/{{$item->carts_id}}" class="btn btn-outline-warning">Remove From Cart</a>
                   </div>
               </div>
               @endforeach
               <a href="/ordernow" class="btn btn-outline-success my-3">Order Now</a>
            </div>
</div>
    </div>

@endsection
