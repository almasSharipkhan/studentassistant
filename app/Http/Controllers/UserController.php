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
        return response()->json(UserEvent::getEventIdAndDate(Auth::id()));
    }
}
