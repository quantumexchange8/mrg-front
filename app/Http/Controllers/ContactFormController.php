<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactFormController extends Controller
{
    public function sendContact(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        Mail::to('hewkf-jm21@student.tarc.edu.my')->send(new Contact($name, $email, $message));

        return redirect()->route('home')->with('contactSent', 'Message has been sent successfully.');
    }
}
