<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class KAlenderController extends Controller
{


    public function kalender()
    {
        return view('kalender');
    }

    public function newAppointment() 
    {
        $rules = array(
            'appointment_date' => 'required',
            'appointment_time' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if (!$validator->fails()) {
            $appointment = new Appointment;
            $appointment->dateTime = strtotime(Input::get('appointment_date') . ' ' . Input::get('appointment_time'));
            $appointment->confirmed = false;
            $appointment->user = Auth::user();
            $appointment->save();
        }
        return redirect()->route('Kalender');
    }

}
