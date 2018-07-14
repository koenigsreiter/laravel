<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function getLogin()
    {
        return view('auth.reg');
    }


    public function postLogin()
    {
        return view('auth.reg');
    }




    public function getRegister()
    {
        return view('auth.reg');
    }
    public function postRegister()
    {
        return view('auth.reg');
    }
}