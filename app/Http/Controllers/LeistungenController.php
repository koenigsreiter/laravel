<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LeistungenController extends Controller
{


    public function leistungen()
    {
        return view('leistungen');
    }

}
