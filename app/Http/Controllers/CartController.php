<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

class CartController extends Controller
{

    public function index(){
       $carts = Cart::where('user_ip',request()->ip())->get();
        return view('admin.cart.all_cart',compact('carts'));
    }

public function add_to_cart(Request $request){
    $check = Cart::where('product_id',$request->id)->where('user_ip',request()->ip())->first();
    if($check){
        $check = Cart::where('product_id',$request->id)->where('user_ip',request()->ip())->increment('quantity');
        return Redirect()->back()->with('success','product added on cart');
    }else{
        Cart::insert([
            'product_id'=>$request->id,
            'quantity'=>'1',
            'price'=>$request->price,
            'user_ip'=>request()->ip(),
            ]);

            return Redirect()->back()->with('success','product added on cart');
    }

}

public function delete( $id)
{
    $delete = Cart::find($id);
  $delete->delete();
  if($delete)
  return redirect()->back();
}

public function update(Request $request, $id)
{
    $check = Cart::where('id',$id)->where('user_ip',request()->ip())->update([

    'quantity'=>$request->quantity

]);
  return redirect()->back();
}

public function wishlist_index(){
    $wishlists = Wishlist::where('user_ip',request()->ip())->get();
     return view('admin.cart.wishlist',compact('wishlists'));
 }
public function wishlist(Request $request){
    $check = Wishlist::where('product_id',$request->id)->where('user_ip',request()->ip())->first();
    if($check){
        $check = Wishlist::where('product_id',$request->id)->where('user_ip',request()->ip())->increment('quantity');
        return Redirect()->back()->with('success','product added on cart');
    }else{
        Wishlist::insert([
            'product_id'=>$request->id,
            'quantity'=>'1',
            'price'=>$request->price,
            'user_ip'=>request()->ip(),
            ]);

            return Redirect()->back()->with('success','product added on cart');
    }

}

public function delete_wishlist( $id)
{
    $delete = Wishlist::find($id);
  $delete->delete();
  if($delete)
  return redirect()->back();
}



public function checkout(){

    return view('frontend.pages.checkout');
}
public function login_check(){

    return view('frontend.pages.login_check');
}


}
