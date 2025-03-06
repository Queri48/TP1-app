<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view("client.contact");
    }

    public function contact_traitement(Request $request)
    {
        //dd($request->all());
        Contact::create([
            'nom' => $request->fullname,
            'email' => $request->email,
            'telephone' => $request->phone,
            'sujet' => $request->subject,
            'message' => $request->message
        ]);
        return redirect()->route('client.contact');
    }
}
