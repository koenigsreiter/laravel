<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{


    public function profil()
    {
        $appointments = DB::table('appointments')
                            ->where([
                                ['user_id', '=', Auth::id()],
                                ['confirmed', '=', '1']
                            ])
                            ->get();
        return view('profil')->with('appointments', $appointments);
    }

}
