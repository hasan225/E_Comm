@extends('master')
@section('content')

<div class="custom-product ms-4 ">

    <div class="col-sm-10">

        <div class="trending-wrapper">
            <h4>My Orders</h4>

            @foreach ($orders as $item)

               <div class="row searched-item border-bottom my-4 ">
                   <div class="col-sm-4">
                   <a href="detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" alt="" style="height:150px;width:150px !important">

                   </a>
               </div>

                   <div class="col-sm-4">
                   <a href="detail/{{$item->id}}"  >

                        <div>
                            <h2>Name: {{$item->name}}</h2>
                            <p>Delivary Status: {{$item->status}}</p>
                            <p>Payment Status: {{$item->payment_status}}</p>
                            <p>Payment Method: {{$item->payment_method}}</p>

                        </div>
                   </a>
               </div>
               </div>
               @endforeach

            </div>
</div>
    </div>

@endsection
