@extends('layouts.frontend2')                                     
   
@section('title')
Home
@endsection
@section('meta')
<style>
    
</style>
@endsection


@section('content')

<section id="page-header" class="cart-header">
    <div>
        <h2>#BUY NOW</h2>
    </div>
   
</section>
 <section id="cart" class="section-p1">
<table width="100%">
<thead>
    <tr>
        <td>Remove</td>
        <td>Image</td>
        <td>Product</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>Subtotal</td>
    </tr>
</thead>
<tbody>
    <tr>
        <td><i class="far fa-times-circle"></i><a href="#"></a></td>
         <td><img src="{{asset('frontend/img/robotics2/1.Central Processing Unit (CPU.jpg')}}" alt=""></td>
         <td>Central Processing Unit</td>
         <td>$120</td>
         <td><input type="number" value="1"</td>
         <td>$118</td>
    </tr>
    <tr>
        <td><i class="far fa-times-circle"></i><a href="#"></a></td>
         <td><img src="{{asset('frontend/img/robotics2/1.Flight Controller.jpg')}}"alt=""></td>
         <td>Flight Controller</td>
         <td>$120</td>
         <td><input type="number" value="1"</td>
         <td>$118</td>
    </tr>
    <tr>
        <td><i class="far fa-times-circle"></i><a href="#"></a></td>
         <td><img src="{{asset('frontend/img/robotics2/6.GPS Module.jpg')}}" alt=""></td>
         <td>GPS Module</td>
         <td>$120</td>
         <td><input type="number" value="1"></td>
         <td>$118</td>
    </tr>
</tbody>
</table>
 </section>

<section id="cart-add">
<div id="coupon">
  <h3>  Apply Coupon</h3>
  <div>
    <input type="text" placeholder="Enter Your Coupon " >
    <button class="normal">Apply</button>
  </div>
</div>
<div id="subtotal">
    <h3>Cart Total</h3>
    <table>
        <tr>
           <td>Cart Subtotal</td>
           <td>$332</td>
        </tr>
        <tr>
            <td>Shipping
            </td>
            <td>Free</td>
        </tr>
        <tr>
            <td><strong>Total</strong></td>
            <td><strong>$335</strong></td>
        </tr>

    </table>
    <button class="normal">Proceed To Cheakout</button>
</div>
</section>


@endsection

@section('scripts')

@endsection

