<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_Detail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(){
      $orders =  Order::all();
      $order_details =  Order_Detail::all();
        return view('admin.order.order',compact('orders','order_details'));

    }
    public function order_delete($id){
      $orders =  Order::find($id)->delete();

        return back()->with('message', 'deleted');

    }
    public function order_details($id){
        $orders = Order::where('orders.id', $id)->first();
      $order_details = Order_Detail::where('order_id', $id)->get();
        return view('admin.order.order_detail',compact('orders','order_details'));

    }
    public function invoice($id){
        $orders = Order::where('orders.id', $id)->first();
      $order_details = Order_Detail::where('order_id', $id)->get();
        return view('admin.order.invoice',compact('orders','order_details'));
    }

}
