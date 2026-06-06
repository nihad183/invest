<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function index() {
        return view('contact');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email'=> 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message'=> 'required|string|max:2000',
        ]);

        Contact::create($data);

        $adminEmail = config('mail.admin_email') ?? 'zairnihad7@gmail.com';

        Mail::send('emails.contact', [
            'name' => $data['name'],
            'email' => $data['email'],
            'subject' => $data['subject'] ?? 'Sans sujet',
            'user_message' => $data['message'],
        ], function($mail) use ($data, $adminEmail){
            $mail->to($adminEmail)
                 ->subject('Nouveau message de ' . $data['name']);
        });

        return back()->with('success', 'Votre message a été envoyé avec succès!');
    }
}
