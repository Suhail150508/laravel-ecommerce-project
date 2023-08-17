@extends('admin.master')

@section('content')
    <div class="row-fluid sortable" style="margin: 2rem 16rem;width:90%">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <p class="alert-success">
                    <?php

                    $message = Session::get('message');
                    if ($message) {
                        echo $message;
                        Session::put('message', null);
                    }
                    ?>
                </p>

            </div>


            <div class="box-content">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            {{-- <th>Order Total</th> --}}
                            <th>Order Date & Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

{{--
                    @php
                    $total_price= App\Models\Order_Detail::where('user_ip',request()->ip())->sum('product_sales_quantity');
                       @endphp --}}


                    @foreach ($orders as $order)

                        <tbody>
                            <tr>
                                <td>{{ $order->id }}</td>

                                <td class="center">{{ $order->Customer->name }}</td>
                                {{-- <td class="center">{{   $total_price }}</td> --}}
                                <td class="center">{{ \Carbon\Carbon::now() }}</td>

                                <td class="center">
<div>
    <form action="{{ url('/orders/'.$order->id) }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger"> <i class="halflings-icon white trash"></i></button>
    </form>
</div>
                                    {{-- <a class="btn btn-danger" href="{{ url('/orders/'.$order->id) }} id="delete">
                                        <i class="halflings-icon white trash"></i>
                                    </a> --}}

                                    {{-- <form method="POST" action="{{ url('/orders/'.$order->id ) }}" >
                                        @csrf

                                        <button type="submit" class="btn btn-danger"> <i class="halflings-icon white trash"></i></button>

                                    </form> --}}
                                    <a class="btn btn-success " href="{{ url('/order_details/' . $order->id) }}"> Details_info
                                    </a>

                                </td>
                            </tr>

                        </tbody>
                    @endforeach
                    {{-- @endforeach --}}


                </table>


            </div>
        </div>

    </div>
@endsection
