<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }
    public function show(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'msg' => 'required',
        ]);

        return view('contacts.show', compact('request', $request));
    }
}
