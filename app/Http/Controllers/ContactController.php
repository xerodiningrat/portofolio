<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact'); // Make sure 'contact' is the correct name of your contact form view file (contact.blade.php)
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('febyanta6@gmail.com')->send(new ContactMail($data));

        return redirect()->route('contact.form')->with('success', 'Pesan berhasil dikirim!');
        // Make sure you have a named route for the contact form: 'contact.form'
    }
}
