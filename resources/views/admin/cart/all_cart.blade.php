@extends('frontend.master')
@section('content')

<div class="cart_order" style="margin:2rem 16rem;width:80%">

    <table class="table" style="margin:0 auto;padding:0 10rem">
        <thead>
          <tr>
            <th style="width: 20%">Product</th>
            <th style="width: 10%">Price</th>
            <th style="width: 30%">Quantity</th>
            <th style="width: 15%">Total</th>
            <th style="width: 15%">actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($carts as $cart )

            @php
            $cart->product['image'] = explode("|", $cart->product->image);

            $images = $cart->product->image[0];
     @endphp
          <tr>
            <td scope="row">
                <img src="{{asset('/image/'.$images ) }}" alt="" style="width: 50px;height:50px">
            </td>
            <td>&#2547; {{ $cart->price }}</td>
            <td>
              <div class="quantity">
             <form action="{{ url('/quantity_update'.$cart->id) }}" method="post">
                @csrf
                <div class="pro-quantity">
                  <input type="text" name ="quantity" value="{{ $cart->quantity }}" min="1">
            <button type="submit" class="btn btn-success">update</button>
                </div>
            </form>
              </div>
              {{ $cart->quantity }}
            </td>
            <td>&#2547; {{ $cart->quantity * $cart->price }}</td>
            <td>
              <a href="{{ url('/delete_item'.$cart->id) }}"> <button class="btn btn-danger">Delete</button></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>


    @php
 $total_price= App\Models\Cart::all()->where('user_ip',request()->ip())->sum(function($t){
 return  $t->quantity * $t->price;
    });
 $total_quantity= App\Models\Cart::all()->where('user_ip',request()->ip())->sum('quantity');
    @endphp
    <div class="chechkOut" style="background-color:gray;width:40%;margin:0 auto;margin-top:15rem;margin-bottom:7rem;background-color:rgb(156, 242, 141)">
    <h1 style="text-align: center;padding-top:3rem">Cart Total</h1>
    <div class="total" style="display: flex; justify-content:space-between;width:70%;margin:0 auto;margin-top:5rem;margin-bottom:5rem">
        <h3>Total-Quantity</h3>
        <h3>{{   $total_quantity }}</h3>

    </div>
    <div class="total" style="display: flex; justify-content:space-between;width:70%;margin:0 auto;margin-top:5rem;margin-bottom:5rem">

        <h3>Total-Price </h3>
        <h3>&#2547; {{   $total_price }}</h3>
    </div>
    @php
    $customer_id = Session::get('id');
@endphp
@if ( $customer_id != Null)
<a class="btn btn-primary" href="{{ url('/checkout') }}" style="padding:1rem 5rem; margin-left:40rem;font-size:2.5rem;margin-bottom:2rem;">Check Out</a>
@else
<a class="btn btn-primary" href="{{ url('/login') }}" style="padding:1rem 5rem; margin-left:40rem;font-size:2.5rem;margin-bottom:2rem;">Check Out</a>
@endif
</div>

          <tbody>
            <tr>
              <td></td>
              <td></td>
            </tr>

          </tbody>
      </div>
</div>


@endsection


