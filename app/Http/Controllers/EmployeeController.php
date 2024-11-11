<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Trait\SaveFile;

class EmployeeController extends Controller
{
    use SaveFile;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Employee::paginate(10); // Or use pagination for better performance
        return view('admin.employee.employeelist', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.employee.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $request->validate([
            'name' => 'required|string|max:80',
            'position' => 'required|string|max:100',
            'facebook' => 'required|string|max:60',
            'instagram' => 'required|string|max:60',
            'twitter' => 'required|string|max:60',
            'linkedin' => 'required|string|max:60',
            'status' => 'required|in:0,1', // Only allow '0' or '1' for hide/show
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file type and size
              
        ]);
    
        // Handle the image upload if an image is provided
        $image = $this->saveImage($request->file('image'));
    
        
        $employee = Employee::create([
            'name' => $request->input('name'),
            'position' => $request->input('position', 0), // Default position is 0 if not provided
            'facebook' => $request->input('facebook'),
            'twitter' =>  $request->input('twitter'),
            'linkedin' => $request->input('linkedin'),
            'instagram' => $request->input('instagram'),
            'status' => $request->input('status'),
            'image' => $image, // Save the image path

        ]);

        // Redirect back with a success message
        return redirect()->route('employee.create')->with('success', 'Employee added successfully!');
    }
        // Redirect or return a response
        

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('admin.employee.add',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|string|max:80',
            'position' => 'required|string|max:100',
            'facebook' => 'required|string|max:60',
            'instagram' => 'required|string|max:60',
            'twitter' => 'required|string|max:60',
            'linkedin' => 'required|string|max:60',
            'status' => 'required|in:0,1', // Only allow '0' or '1' for hide/show
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file type and size
        ]);

         $employee->image;

        if(!empty($request->file('image'))){
            $new_image=$this->saveImage($request['image']);
            if(file_exists(public_path('image/'.$employee->image))){
                unlink(public_path('image/'.$employee->image));
            }
        }else{
            $new_image=$employee->image;
        }

        try {
            Employee::where('id',$employee->id)->update(array_merge($request->except('_token','_method','image'),['image'=>$new_image]));
            return to_route('employee.index')->with('success','Employee Updated Successfully!');
        } catch (\Exception $ex) {
            return back()->with('error','Employee Is Not Updated!');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        try {
            $employee1=employee::where('id',$employee->id)->pluck('image')->first();
            $employee->delete();
            if(file_exists(public_path('image/'.$employee1))){
                unlink(public_path('image/'.$employee1));
            }
            return back()->with('success','employee Deleted Successfully!');
        } catch (\Exception $ex) {
            return back()->with('error','employee Is Not Deleted!');
        }
    }
    }

