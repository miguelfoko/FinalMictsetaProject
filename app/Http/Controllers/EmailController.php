<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Models\Subscribe;

class EmailController extends Controller{
    
    public function index()    {
        
    }

    public function create()    {
        

    }

    public function store(Request $request)   {
        $name=$request->input('name');
        $organisation=$request->input('organisation');
        $email=$request->input('email');
        $subject=$request->input('subject');
        $message = $request->input('message');
        

        $subscribe=new Subscribe;
        $subscribe->name=$name;
        $subscribe->organisation=$organisation;
        $subscribe->email=$email;
        $subscribe->subject=$subject;
        $subscribe->message=$message;
        $subscribe->number=00000000;
        $subscribe->save();

        $title = 'From TVET Colleges (do not reply)';
        $body = '<h2>Name:</h2> '.$name.'<br> <h2>From:</h2> '.$organisation.',<br> <h2>Email address:</h2>
         '.$email.
                '<br> <h2>Message:</h2> '.$message; 
        
        //$title="Title1";
        //$body="Body1";
        Mail::to($email)
                //->cc('fosimilan@gmail.com')
                ->bcc('fosimilan@gmail.com')
                ->send(new WelcomeMail($title, $body));
            //;
        $status='Subscription request has been successfully sent.';
        return view('viewGetInTouch',compact('status'));
    }

}
