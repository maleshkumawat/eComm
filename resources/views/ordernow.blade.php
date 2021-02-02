@extends('master')
@section('content')
            <div class="custom-product">
               <div class="col-sm-6">
                <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td>Price</td>
                        <td>{{$total}}.00 INR</td>
                      </tr>
                      <tr>
                        <td>Tax</td>
                        <td>00.00 INR</td>
                      </tr>
                      <tr>
                        <td>Delivery Charge</td>
                        <td>100 INR</td>
                      </tr>
                       <tr>
                        <td>Total</td>
                        <td>{{$total + 100}}.00 INR</td>
                      </tr>
                    </tbody>
                  </table>
                  <form action="/orderplace" method="POST">
                    @csrf
                    <div class="form-group">
                    <textarea placeholder="enter your address" name="address" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label  for="">Payment Method</label>
                        <p><input type="radio" value="cash" name="payment"><span class="payment">Online Payment</span></p>
                        <p><input type="radio" value="cash" name="payment"><span class="payment">EMI Payment</span></p>
                        <p><input type="radio" value="cash" name="payment"><span class="payment">Payment On Delivery</span></p>
                    </div>
                    <button type="submit" class="btn btn-default">Order Now</button>
                  </form>
            </div></div>
    @endsection
   