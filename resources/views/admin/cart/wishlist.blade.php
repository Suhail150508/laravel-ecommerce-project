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
            @foreach ($wishlists as $wishlist )

            @php
            $wishlist->product['image'] = explode("|", $wishlist->product->image);

            $images = $wishlist->product->image[0];
     @endphp
          <tr>
            <td scope="row">
                <img src="{{asset('/image/'.$images ) }}" alt="" style="width: 50px;height:50px">
            </td>
            <td>&#2547; {{ $wishlist->price }}</td>
            <td>

              {{ $wishlist->quantity }}
            </td>
            <td>&#2547; {{ $wishlist->quantity * $wishlist->price }}</td>
            <td>
              <a href="{{ url('/delete_wishlist'.$wishlist->id) }}"> <button class="btn btn-danger">Delete</button></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>



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


