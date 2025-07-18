<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Email;
use App\Mail\EmailRegistered;

class emailController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'email_count' => 'required|integer|min:1|max:100'
        ]);

        $email = new Email();
        $email->email = $request->email;
        $email->save();

        for ($i=0; $i < $request->email_count; $i++) { 
            Mail::to($email->email)->send(new EmailRegistered($email->email));
        }

        return view('thankyou', ['email' => $email->email]);
    }
}
