<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class adminController extends Controller
{

    public function login(){

        return view('admin.admin_login');
    }

    public function login_store(Request $request){

        $request->validate([
            'admin_email'=>'required',
            'admin_password'=>'required'
        ]);


        $result = Admin::where('admin_email',$request->admin_email)->where('admin_password',$request->admin_password)->first();

       if($result){

    Session()->put('admin_id', $result->admin_id);
    Session()->put('admin_name', $result->admin_name);

      return Redirect::to('admins');

       }
       else{
        return redirect()->route('admin_login');
       }
    }




}
