@extends('frontend.master')
@section('content')

<!-- Order Details -->
@php
$total_price= App\Models\Cart::all()->where('user_ip',request()->ip())->sum(function($t){
return  $t->quantity * $t->price;
   });
$total_quantity= App\Models\Cart::all()->where('user_ip',request()->ip())->sum('quantity');
   @endphp
<div class="row">


<div class="col-md-4"></div>
<div class=" col-md-4 order-details">
    <div class="section-title text-center">
        <h3 class="title">Your Order</h3>
    </div>
    <div class="order-summary">
        <div class="order-col">
            <div><strong>PRODUCT</strong></div>
            <div><strong>TOTAL</strong></div>
        </div>

        <div class="order-products">
            @foreach ($data as $datas )
            <div class="order-col">
           <div>{{ $datas->quantity }}*{{ $datas->product->name }}</div>
           <div>{{ $datas->price* $datas->quantity }}</div>
            </div>
            @endforeach
            <div class="order-col">
                <div>Total Price</div>
                <div>&#2547; {{ $total_price }}</div>
            </div>

        </div>
        <div class="order-col">
            <div>Shiping</div>
            <div><strong>&#2547; 50</strong></div>
        </div>
        @php
        $total= $total_price + 50;
    @endphp
        <div class="order-col">
            <div><strong>TOTAL</strong></div>
            <div><strong class="order-total">&#2547; {{ $total }}</strong></div>
        </div>
    </div>
    @php
    $customer_id = Session::get('id');
@endphp
    <form action="{{ url('/order_place'.$customer_id->id) }}" method="post">
        @csrf
<div class="section-title text-center" style="margin-top:50px">
    <h4 class="title" style="color:#D10024"> Please select the payment method</h4>
</div>

    <div class="payment-method">
        <div class="input-radio">
            <input type="radio" name="payment" id="payment-1" value="cash">
            <label for="payment-1">
                <span></span>
                Cash on delivery
            </label>
            <div class="caption">
                <p>You can also select cash on delivery.</p>
            </div>
        </div>
        <div class="input-radio">
            <input type="radio" name="payment" id="payment-2" value="Bkash">
            <label for="payment-2">
                <span></span>
                Bkash
            </label>
            <div class="caption">
                <p>Bkash No: 01798562848.</p>
            </div>
        </div>
        <div class="input-radio">
            <input type="radio" name="payment" id="payment-3" value="Nogod">
            <label for="payment-3">
                <span></span>
                Nogod
            </label>
            <div class="caption">
                <p>Nogod No:01798562848.</p>
            </div>
        </div>
    </div>
    <div class="input-checkbox">
        <input type="checkbox" id="terms">
        <label for="terms">
            <span></span>
            I've read and accept the <a href="#">terms & conditions</a>
        </label>
    </div>
  <input type="submit" class="primary-btn order-submit" value="Place Order" style="float: right">
</div>
</form>

<div class="col-md-4"></div>
</div>

<!-- /Order Details -->
@endsection
