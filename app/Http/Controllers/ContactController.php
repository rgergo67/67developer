<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;

use Validator,Redirect,Response;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        \Mail::to('rgergo67@gmail.com')->send(new Contact($request->input('email'), $request->input('message')));

        Response::json(array('success' => true));
    }
}
