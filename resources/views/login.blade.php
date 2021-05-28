@extends('master')
@section('content')

<!-- contact us section starts -->



<section id="contact-us" class="" style="height: 74vh">

    <div class="section-title text-center">
        <h2 class="heading mb-5 ">Login</h2>
        <hr class="w-25 mx-auto">
    </div>

    <div class="wrapper">
    <div class="row">
        <div class="col-lg-12">

            <form action="/login" method="POST" class="was-validated w-50 m-auto formcls">
                @csrf
    <div class="form-group mt-5">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>

    <div class="form-group text-center mt-4">
        <input type="submit" class="btn btn-outline-primary " value="Login" data-bs-toggle="modal" data-bs-target="#exampleModal">
        {{-- <input type="reset" class="btn btn btn-outline-info" value="reset" data-bs-toggle="modal" data-bs-target="#exampleModal"> --}}
    </div>

</form>

        </div>
        </div>

</section>
@endsection
