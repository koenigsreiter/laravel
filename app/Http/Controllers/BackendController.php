<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class BackendController extends Controller
{

    public function root()
    {
        return redirect()->route('dashboard');
    }

    public function backend()
    {
        return view('backend/dashboard');
    }


}
