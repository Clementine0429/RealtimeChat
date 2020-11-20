<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;
use App\Events\RedisEvent;

class RedisController extends Controller
{
    public function index(){
        $messages = Messages::all();

        return view('message', compact('messages'));
    }
    public function postSendMessage(Request $request){
        $message = Messages::create($request->all());

        event(
            $e = new RedisEvent($message)
        );
        return redirect()->back();
    }
}
