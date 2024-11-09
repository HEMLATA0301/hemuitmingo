<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use Mail;
use App\Mail\ConfirmationMail;
use App\Mail\EnquiryMail;

class EnquiryController extends Controller
{
    public function index(){
        $enquiries=Enquiry::select('id','name','email','subject','message','created_at')->orderBY('id','desc')->paginate(10);
        return view('admin.enquiry.list',compact('enquiries'));
    }

    public function store(Request $request){
        $request->validate(['name'=>'required|string|max:70',
            'email'=>'nullable|max:70|email',
            'subject'=>'required|string|max:255',
            'message'=>'required|string']);
        try {
            Enquiry::create($request->all());

            //Confirmation Notification Mail
            if(!empty($request['email'])){
                $data=[
                    'title'=>"Enquiry",
                    'name'=>$request['name'],
                ];
                Mail::to($request['email'])->send(new ConfirmationMail($data));
            }

            //Admin Notification Mail
            $data=['name'=>$request['name'],
                'email'=>$request['email'],
                'subject'=>$request['subject'],
                'message'=>$request['message'],
            ];
            Mail::to('admin@itmingo.com')->send(new EnquiryMail($data));

            return back()->with('success','Enquiry Added Successfully!');
        } catch (\Exception $ex) { return $ex;
            return back()->with('error','Enquiry Is Not Added!');
        }
    }
}
