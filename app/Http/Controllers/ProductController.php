<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Trait\SaveFile;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    use SaveFile;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::orderBy('id','desc')->paginate(10);
        return view('admin.product.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['title'=>'required|string|max:255|unique:products,title',
            'image'=>'required|mimes:jpg,png,webp,jpeg,gif',
            'feature'=>'required|max:255|string',
            'priority'=>'required|max:11',
            'short_description'=>'required|max:255|string',
            'description'=>'required|max:255|string',
            'status'=>'required']);
        try {
            $image=$this->saveImage($request['image']);
            Product::create(array_merge($request->except('_token','image'),['image'=>$image]));
            return to_route('product.index')->with('success','Product Added Successfully!');
        } catch (\Exception $ex) {
            return $ex;
            return back()->with('error','Product Is Not Added!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.add',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
            $request->validate(['title'=>[
                Rule::unique('products')->ignore($product->id),
                    'required','max:100','string'],
            'image'=>'nullable|mimes:jpg,png,webp,jpeg,gif',
            'feature'=>'required|max:255|string',
            'priority'=>'required|max:11',
            'short_description'=>'required|max:255|string',
            'description'=>'required|max:255|string',
            'status'=>'required']);
        $product1=Product::where('id',$product->id)->pluck('image')->first();
        if(!empty($request->file('image'))){
            $new_image=$this->saveImage($request['image']);
            if(file_exists(public_path('image/'.$product1))){
                unlink(public_path('image/'.$product1));
            }
        }else{
            $new_image=$product1;
        }
        try {
            Product::where('id',$product->id)->update(array_merge($request->except('_token','_method','image'),['image'=>$new_image]));
            return to_route('product.index')->with('success','Product Updated Successfully!');
        } catch (\Exception $ex) {
            return back()->with('error','Product Is Not Updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            $product1=Product::where('id',$product->id)->pluck('image')->first();
            $product->delete();
            if(file_exists(public_path('image/'.$product1))){
                unlink(public_path('image/'.$product1));
            }
            return back()->with('success','Product Deleted Successfully!');
        } catch (\Exception $ex) {
            return back()->with('error','Product Is Not Deleted!');
        }
    }
}
