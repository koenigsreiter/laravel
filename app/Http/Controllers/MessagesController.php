<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MessagesController extends Controller
{
    
    public function getMessages($id) {
        return User::find($id)->messages;
    }

    public function newMessage($id) {
        $user = User::find($id);
        $user->messages = array_merge($user->messages, [array('user' => Input::get('user'), 'data' => Input::get('data'), 'date' => Input::get('date'))]);
        $user->save();
        return $user->messages;
    }
    
}
