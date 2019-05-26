<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserEvent;

class EventController extends Controller
{
    public function eventGo() {
        $id = Auth::id();
        if(UserEvent::where([
            ['user_id','=',$id],
            ['event_id','=',request('event_id')]])->get()->count()
        ) {
            $user_event = UserEvent::where([
                ['user_id','=',$id],
                ['event_id','=',request('event_id')],
            ]);
            $user_event->delete();
        } else {
            $user_event = new UserEvent;
            $user_event->user_id = $id;
            $user_event->event_id = request('event_id');
            $user_event->save();
        }
    }
}
