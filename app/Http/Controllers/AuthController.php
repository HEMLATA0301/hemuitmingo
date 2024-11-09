<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Career;
use App\Models\Customer;
use App\Models\Enquiry;
use App\Models\Product;

class AuthController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function loginSubmit(Request $request){
        $request->validate([
            'email'=>'required|max:70|email|exists:users,email',
            'password'=>'required|string|max:12|min:8'
        ]);
        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return to_route('dashboard')->with('success','Login Successfully!');
        }else{
            return back()->with('error','YOur Credentials Are Not Match!');
        }
    }

    public function dashboard(){
        $product_count=Product::count();
        $enquiry_count=Enquiry::count();
        $career_count=Career::count();
        $customer_count=Customer::count();
        return view('admin.dashboard',compact('product_count','enquiry_count','career_count','customer_count'));
    }

    public function logout(){
        session()->flush();
        Auth::logout();
        return to_route('login')->with('success','Logout Successfully!');
    }
}
