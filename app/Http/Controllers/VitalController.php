<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class VitalController extends Controller
{


    public function vital()
    {
        return view('vital');
    }

}
