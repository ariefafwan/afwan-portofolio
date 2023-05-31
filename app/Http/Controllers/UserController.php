<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function contactme(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $comment = $request->comment;
        $phone = $request->phone;

        $contactbody = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'comment' => $comment
        ];

        Mail::to('testing@tmariefafwan.com')->send(new ContactMail($contactbody));

        return redirect()->back()->with('success', 'Thanks for giving me a message, I hope we meet soon');
    }
}
