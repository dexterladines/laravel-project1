@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">   
     <table class="table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>Php {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>Php 0</td>
      </tr>
      <tr>
        <td>Shipping Fee</td>
        <td>Php 100</td>
      </tr>
      <tr>
        <td>Total</td>
        <td>Php {{$total+100}}</td>
      </tr>
    </tbody>
  </table>
  <div>
  <form action="/action_page.php">
  <div class="form-group">
    <textarea type="text" placeholder="Enter your Address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label><br><br>
    <input type="radio" name="payment"><span>Online Payment</span><br><br>
    <input type="radio" name="payment"><span>Cash on Delivery</span>

  </div>
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
  </div>  
     </div>
</div>
@endsection