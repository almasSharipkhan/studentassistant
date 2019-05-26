<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public $successStatus = 200;

    public function getTeacherById()
    {

        $user = \App\User::find(request('user_id'));
        return response()->json(['success' => $user], $this->successStatus);
    }
}
