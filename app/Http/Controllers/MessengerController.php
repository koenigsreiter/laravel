<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MessengerController extends Controller
{


    public function messenger()
    {
        return view('messenger');
    }

}
