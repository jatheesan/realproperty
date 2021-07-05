<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\MailSend;
use App\Rules\Captcha;

class sendEmailController extends Controller
{
    function index()
    {
        return view('mails.index');
    }

    function sendm(Request $request)
    {
        $this-> validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response'=>new Captcha(),
        ]);

        $mail_data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        );

        Mail::to('boxroomrent@gmail.com')->send(new SendMail($mail_data));

        return back()->with('success', 'thanks for contacting us!');

    }

    function mail(Request $request)
    {
        $this-> validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response'=>new Captcha(),
        ]);

        $mail_data = array(
            'id' => $request->id,
            'location' => $request->location,
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        );

        Mail::to('boxroomrent@gmail.com')->send(new MailSend($mail_data));

        return back()->with('success', 'thanks for contacting us!');

    }

    public function send(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response'=>new Captcha(),
        ]);

        $mail_data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
                ];

    Mail::send('mails.index', $mail_data, function($message) use ($mail_data)
    {
        $message->from($mail_data['email']);
        $message->to('boxroomrent@gmail.com','Boxroom');
        $message->subject($mail_data['subject']);
    });

    return back()->with('success', 'thanks for contacting us!');
    }
}
