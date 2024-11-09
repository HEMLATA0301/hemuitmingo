<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WebController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function contact(){
        return view('contact');
    }
    public function pricing(){
        return view('pricing');
    }
    public function career(){
        return view('career');
    }
    public function servicepage(){
        return view('servicepage');
    }
    public function client(){
        return view('client');
    }
    public function termus(){
        return view('termus');
    }
    public function privacy(){
        return view('privacy');
    }
    public function product(){
        $products=Product::select('title','short_description','image')
            ->orderBy('priority')->where('status',0)->get();
        return view('product',compact('products'));
    }
}