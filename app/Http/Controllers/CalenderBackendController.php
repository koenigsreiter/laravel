<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalenderBackendController extends Controller
{

    public function root()
    {
        return redirect()->route('dashboard');
    }

    public function calender_backend()
    {
        $appointments = DB::table('appointments')
                            ->join('users', 'users.id', '=', 'appointments.user_id')
                            ->select('appointments.*', 'users.name', 'users.email')
                            ->orderBy('dateTime', 'asc')
                            ->where('confirmed', '=', '0')
                            ->get();
        return view('backend/calender_backend')->with('appointments', $appointments);
    }


}
