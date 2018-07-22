<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CalenderBackendController extends Controller
{

    public function root()
    {
        return redirect()->route('dashboard');
    }

    public function calender_backend()
    {
        return view('backend/calender_backend');
    }


}
