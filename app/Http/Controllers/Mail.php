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
        $validatedData = $request->validate([
            'sender-name' => 'required',
            'receive-name' => 'required',
            'subject' => 'required',
            'massage' => 'required',
        ]);

        $details = [
            'sender' => $validatedData['sender-name'],
            'receive' => $validatedData['receive-name'],
            'subject' => $validatedData['subject'],
            'body' => $validatedData['massage']
        ];

        MailClass::to($details['receive'])->send(new MailSend($details));
        return new RedirectResponse(route('mail.index'));
    }
}
