<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail as MailClass;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Mail extends Controller
{
    public function index()
    {
        return view('pages.mail.main');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'body' => 'This is a test email.'
        ];

        MailClass::to('komchan448@gmail.com')->send(new MailSend($details));
        return new RedirectResponse(route('homepage'));
    }
}
