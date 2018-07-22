<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\User;

class AuthController extends Controller
{

    public function getLogin()
    {
        return view('auth_login');
    }


    public function postLogin()
    {
        $rules = array(
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:6'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('getLogin')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            // create our user data for the authentication
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Hash::make(Input::get('password'))
            );

            if (!Auth::attempt($userdata)) {
                return redirect()
                    ->route('getLogin')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
            }
        }

        return redirect()->route('Profil');
    }


    public function getRegister()
    {
        return view('auth');
    }
    public function postRegister()
    {
        $rules = array(
            'vorname' => 'required',
            'nachname' => 'required',
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:6',
            'adresse' => 'required',
            'ort' => 'required',
            'plz' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('getRegister')
                ->withErrors($validator)
                ->exceptInput(Input::except('password'));
        } else {
            $user = new User();
            $user->name = Input::get('vorname') . ' ' . Input::get('nachname');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->street = Input::get('adresse');
            $user->city = Input::get('ort');
            $user->zipCode = Input::get('plz');
            $user->complaints = Input::get('beschwerden');
            $user->save();

            $userdata = array(
                'email' => $user->email,
                'password' => $user->password
            );

            if (!Auth::attempt($userdata)) {
                return redirect()->route('getRegister');
            }
        }
        return redirect()->route('Profil');
    }
}