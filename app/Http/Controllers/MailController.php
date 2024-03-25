<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){
        $to_mail = "kumarchembeti1998@gmail.com";
        $my_message = "test";
        $subject = "Subject";
        
        Mail::to($to_mail )->send(new WelcomeMail($my_message,$subject ));

        return redirect()->route('home');
    }
    public function sendBtn(){
        return view('mail.button');
    }
}
