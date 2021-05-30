@extends('master')
@section('content')

<div class="custom-product ms-4 ">

    <div class="col-sm-12 w-25 m-auto mb-5">
           <table class="table">
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>Amount For Products</td>
      <td>{{$total}}Tk</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Delivery</td>
      <td>500Tk</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Tax</td>
      <td>0Tk</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Total Amount</td>
      <td>{{$total +500}}Tk</td>
    </tr>
</tbody>
</table>
</div>
<div class="w-50 m-auto">

    <form action="/orderplace" method="POST">
        @csrf

<div class="mb-3">
<label for="email" class="form-label">Email address</label>
<input type="email" class="form-control" id="email" name="email">

</div>

<div class="mb-3">
<label for="password" class="form-label">Password</label>
<input type="password" class="form-control" id="password" name="password">
</div>

<div class="mb-3">
<label for="payment" class="form-label me-4">Payment Methods</label>

<div class="form-check form-check-inline">
    <label class="payment" for="inlineCheckbox1">online Payment</label>
    <input class="form-check-input" type="checkbox" id="payment" name="payment" value="online Payment">
</div>
<div class="form-check form-check-inline">
    <label class="payment" for="inlineCheckbox2">EMI Payment</label>
    <input class="form-check-input" type="checkbox" id="payment" name="payment" value="EMI Payment">
</div>
<div class="form-check form-check-inline">
    <label class="payment" for="inlineCheckbox3">Payment On Delivery</label>
    <input class="form-check-input" type="checkbox" id="payment" value="Payment On Delivery" name="payment">
</div>
<h5><button type="submit" class="btn btn-outline-primary">Order Now</button></h5>

</form>
</div>

</div>

@endsection
