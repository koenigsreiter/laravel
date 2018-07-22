<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class NotfallmedizinController extends Controller
{


    public function notfall()
    {
        return view('notfallmedizin');
    }

}
