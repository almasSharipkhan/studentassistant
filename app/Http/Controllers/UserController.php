<?php

namespace App\Http\Controllers;

use App\UserEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public $successStatus = 200;

    public function detail()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this-> successStatus);
    }

    public function userReminders()
    {
        $user_events = \App\UserEvent::userEventsByUserId(Auth::id())->get();
        $i = 0;
        $events = null;
        foreach ($user_events as $user_event)
        {
            $event['event_id'] = $user_event->event_id;
            $event['event_date'] = $user_event->events->event_date;
            $events[$i] = $event;
            $i++;
        }
        return response()->json($events);
    }

    public function deanAsk()
    {
        $question = new \App\Question();
        $question->question_content = request('question_content');
        $question->save();
        return response()->json("success");
    }
}
