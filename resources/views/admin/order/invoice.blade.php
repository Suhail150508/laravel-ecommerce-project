@extends('admin.master')

@section('content')

<div class="order_detail" style="margin: 2rem 14rem;width:85%">


<br>
<div class="row-fluid sortable">


    </div><!--/span-->




    <div class="box span6">


    </div><!--/span-->




    <div class="box span12" style="margin-left: auto;">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Order Details</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Product Name</th>
                    <th>Product price</th>
                    <th>Quantity</th>
                    <th>Sub Total</th>
                </tr>
                </thead>

                @foreach ($order_details as $order_detail )

                <tbody>
                    <tr>
                        <td> {{ $order_detail->order_id }}</td>
                        <td class="center"> {{ $order_detail->Order->Customer->name }}</td>
                        <td class="center">&#2547; {{ $order_detail->product_price }} </td>
                        <td class="center">{{ $order_detail->product_sales_quantity }}</td>
                        <td class="center"> &#2547; {{$order_detail->product_price * $order_detail->product_sales_quantity  }} </td>
                    </tr>

                </tbody>
                @endforeach
                <tfoot>
                    @php
                    $total_price= App\Models\Cart::all()->where('user_ip',request()->ip())->sum(function($t){
                    return  $t->quantity * $t->price;
                       });
                       @endphp
                <tr>
                    <td colspan="4" style="font-size: 20px;font-weight: 521;text-align: right; color: red"> Total Amount to pay</td>
                <td><strong style="font-size: 20px; color: #007cff;">&#2547;{{     $total_price }}</strong></td>
                </tr>
                </tfoot>
            </table>


        </div>
    </div><!--/span-->


</div><!--/row-->


</div>
@endsection
