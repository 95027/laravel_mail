<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendBtn()
    {
        return view('mail.button');
    }

    public function contactForm(Request $request)
    {

        $data = $request->all();
        try {
            if ($request->file('pdf')) {
                $fileName = time() . '.' . $request->file('pdf')->extension();
                $request->file('pdf')->move('pdfs', $fileName);

                Mail::to($request->email)->send(new WelcomeMail($data, $fileName));
            }

        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }
}
