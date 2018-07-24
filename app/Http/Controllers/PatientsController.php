<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Appointment;

class PatientsController extends Controller
{

    public function root()
    {
        return redirect()->route('patients');
    }

    public function patients()
    {
        return view('backend/patients')->with('users', User::where('id', '>', '1')->get());
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('backend/patients_edit')->with('user', $user)->with('appointments', Appointment::where('id', '=', $user->id)->get());
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();
        return $this->patients();
    }
}
