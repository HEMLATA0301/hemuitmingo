<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Trait\SaveFile;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    use SaveFile;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers=Customer::paginate(10);
        return view('admin.customer.list',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customer.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required|max:70|string|unique:customers,name',
            'image'=>'required|mimes:jpg,jpeg,webp,png,gif,svg']);

        try {
            $image=$this->saveImage($request['image']);

            Customer::create(array_merge($request->except('_token','image'),['image'=>$image]));
            return redirect()->route('customer.index')->with('success','Customer Added Successfully!');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error','Customer Is Not Added!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('admin.customer.add',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate(['name'=>
            [
                Rule::unique('customers')->ignore($customer->id),
                'required','max:70','string',
            ],
            'image'=>'mimes:jpg,jpeg,webp,png,gif,svg']);
        $image1=Customer::where('id',$customer->id)->pluck('image')->first();
        if(!empty($request['image'])){
            if(file_exists(public_path('image/'.$image1))){
                unlink(public_path('image/'.$image1));
            }
            $image = $this->saveImage($request['image']);
        }else{
            $image=$image1;
        }

        try {
            Customer::where('id',$customer->id)->update(array_merge($request->except('_token','image','_method'),['image'=>$image]));
            return redirect()->route('customer.index')->with('success','Customer Updated Successfully!');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error','Customer Is Not Updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $image1=Customer::where('id',$customer->id)->pluck('image')->first();
        try {
            $customer->delete();
            if(file_exists(public_path('image/'.$image1))){
                unlink(public_path('image/'.$image1));
            }
            return redirect()->back()->with('success','Customer Deleted Suucessfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error','Customer Is Not Deleted');
        }
    }
}
