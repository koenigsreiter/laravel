<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MessagesBackController extends Controller
{


    public function messagesback()
    {
        return view('backend/messagesback');
    }

}
