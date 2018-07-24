<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class MessagesBackController extends Controller
{


    public function messagesback()
    {
        return view('backend/messagesback')->with('users', User::where('id', '>', '1')->get());
    }

}
