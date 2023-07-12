<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Payment;
use App\Models\Shiping;
use Illuminate\Auth\SessionGuard;
use Illuminate\Http\Request;
use Illuminate\Session\SessionServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use SessionHandler;
use Symfony\Component\HttpFoundation\Session\SessionFactory;

class CustomerController extends Controller
{


    public function register(){
        $data = Customer::all();
        return view('frontend.pages.register',compact('data'));
    }
    public function register_store(Request $request)
     {

              $data = array();
            $data['name']= $request->name;     //['name  ']=> there will not be gape
            $data['email']= $request->email;
            $data['password']= $request->password;
            $data['mobile']= $request->mobile;
        $customer_id = Customer::insertGetId($data);
         Session()->put('id', $customer_id);       //take session like it
         Session()->put('name',$request->name);
         return Redirect()->to('login');
     }


    public function login(){
        return view('frontend.pages.login');
    }
    public function logout(){
    Session()->flush();
    return Redirect::to('/');
    }
    public function login_store(Request $request){

        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $result = Customer::where('email',$request->email)->where('password',$request->password)->first();

       if($result){

    Session()->put('id', $result);
    Session()->put('name', $result->name);

      return Redirect::to('/checkout');

       }
       else{
        return Redirect::to('/register');
       }
    }

    public function CustomerAuthCheck()
    {
       $customer_id = Session()->get('id');
       if( $customer_id){
         return;
       }
       else{
    return Redirect::to('login')->send();
       }
}
public function shipping(Request $request){
    $sdata = array();
    $sdata['name'] = $request->name;
    $sdata['email'] = $request->email;
    $sdata['address'] = $request->address;
    $sdata['city'] = $request->city;
    $sdata['country'] = $request->country;
    $sdata['zip_code'] = $request->zip_code;
    $sdata['mobile'] = $request->mobile;
    $id = Shiping::insertGetId($sdata);
    Session()->put('sid', $id);
    Session()->put('name', $request->name);
    return Redirect()->to('/payment');
}


public function payment(){
// $cart_collection = Cart::getContent();
//  $cart_array = $cart_collection->toArray();
$data = Cart::all();
$carts = Cart::where('user_ip',request()->ip())->get();
return view('frontend.pages.payment',compact('carts','data'));
}
public function order_place(Request $request,$id){

$payment_method =$request->payment;
$pdata = array();
$pdata['payment_method'] = $payment_method;
$pdata['status'] = 'pending';
$payment_id = Payment::insertGetId($pdata);



$odata = array();
$odata['cus_id']= $id;
$odata['ship_id'] = $request->session()->get('sid');
$odata['pay_id'] = $payment_id;
$odata['status'] ='pending';
$order_id = Order::insertGetId($odata);


$cartCollection = Cart::all();
$oddata = array();

Foreach($cartCollection as $cartContent){
$oddata['order_id']=$order_id;
$oddata['product_id']=$cartContent->product_id;
$oddata['product_name']=$cartContent->product->name;
$oddata['product_price']=$cartContent->price;
$oddata['product_sales_quantity']=$cartContent->quantity;
Order_Detail::insertGetId($oddata);
};
 return view('frontend.pages.well_done');

// DB::table('order_details')->insert($oddata);

// if($payment_method =='cash'){
//  Cart::where('user_ip',request()->ip())->clear();
//  return view('frontend.pages.well_done');
// }
// elseif($payment_method =='Bkash'){
//     Cart::clear();
//  return view('frontend.pages.well_done');
// }
// elseif($payment_method =='Nogod'){
//     Cart::clear();
//  return view('frontend.pages.well_done');
// }

}
}
