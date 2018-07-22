<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PrivatController extends Controller
{


    public function privat()
    {
        return view('privatleistungen');
    }

}
