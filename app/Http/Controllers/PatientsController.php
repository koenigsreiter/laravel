<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PatientsController extends Controller
{

    public function root()
    {
        return redirect()->route('patients');
    }

    public function patients()
    {
        return view('backend/patients');
    }

    public function edit()
    {
        return view('backend/patients_edit');
    }
}
