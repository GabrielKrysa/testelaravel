<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('contacts.create');
    }
    public function show(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|min:14',
            'subject' => 'required',
            'msg' => 'required',
        ]);

        return view('contacts.show', compact('request', $request));
    }
}
