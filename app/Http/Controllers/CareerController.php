<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Trait\SaveFile;
use Mail;
use App\Mail\ConfirmationMail;
use App\Mail\CareerMail;

class CareerController extends Controller
{
    use SaveFile;

    public function index(){
        $careers=Career::orderBY('id','desc')->paginate(10);
        return view('admin.career.list',compact('careers'));
    }

    public function store(Request $request){

        $request->validate(['name'=>'required|string|max:70',
            'mobile'=>'required|max:10|min:10',
            'email'=>'nullable|max:70|email',
            'skill'=>'required|string|max:255',
            'qualification'=>'required|string|max:255',
            'resume'=>'required']);
        $resume=$this->SavePdf($request->file('resume'));
        try {

            Career::create(array_merge($request->except('resume','_token'),['resume'=>$resume]));

            //Confirmation Notification Mail
            if(!empty($request['email'])){
                $data=[
                    'title'=>"Resume",
                    'name'=>$request['name'],
                ];
                Mail::to($request['email'])->send(new ConfirmationMail($data));
            }

            //Admin Notification Mail
            $data=['name'=>$request['name'],
                'mobile'=>$request['mobile'],
                'email'=>$request['email'],
                'skill'=>$request['skill'],
                'qualification'=>$request['qualification'],
            ];
            Mail::to('admin@itmingo.com')->send(new CareerMail($data));

            return back()->with('success','Career Added Successfully!');
        } catch (\Exception $ex) { return $ex;
            return back()->with('error','Career Is Not Added!');
        }
    }
}
