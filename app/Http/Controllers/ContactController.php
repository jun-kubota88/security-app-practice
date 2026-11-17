<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

    public function submit(Request $request)
    {
        return view('contact.thanks', [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
    }
}