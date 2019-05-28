<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserEvent;
use Illuminate\Support\Facades\Session;

class ScheduleController extends Controller
{
    public $successStatus = 200;

    public function getSpecialities()
    {
        $specialities = \App\Speciality::all();
        return response()->json(['specialities' => $specialities]);
    }

    public function getTeachers()
    {
        $teachers = \App\User::teachers();
        return response()->json(['teachers' => $teachers]);
    }

    public function getStudents()
    {
        $students = \App\User::students()->get();
        return response()->json(['students' => $students]);
    }

    public function getTeacherByUserId()
    {
        $user = \App\User::teacherByUserId(request('user_id'))->get();
        return response()->json(['success' => $user], $this->successStatus);
    }

    public function getScheduleByRoomId()
    {
        $day_name = [null, 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
        for ($i = 1; $i < 8; $i++) {
            $days[$day_name[$i]] = $this->getDayScheduleByRoomId($i);
        }

        return response()->json(['schedule' => $days]);
    }

    public function getDayScheduleByRoomId($day)
    {
        $day = \App\Schedule::scheduleByRoomId(request('room_id'))->day($day)->orderBy('schedule_date', 'asc')->get();

        $j = 0;
        $schedules = null;

        foreach ($day as $lesson)
        {
            $schedules[$j] = $this->getScheduleByDay($lesson);
            $j++;
        }

        return $schedules;
    }

    public function getScheduleByGroupId()
    {
        for ($i = 0; $i < 7; $i++) {
            $days[$i] = $this->getDayScheduleByGroupId($i + 1);
        }

        return response()->json(['items' => $days]);
    }

    public function getDayScheduleByGroupId($dayA)
    {
        $day = \App\Schedule::scheduleByGroupId(request('group_id'))->day($dayA)->orderBy('schedule_date', 'asc')->get();

        $j = 0;
        $schedules = null;

        foreach ($day as $lesson)
        {
            $schedules[$j] = $this->getScheduleByDay($lesson);
            $j++;
        }

        $day_name = [null, 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];

        $obSchedule['day'] = $day_name[$dayA];
        $obSchedule['schedule'] = $schedules;

        return $obSchedule;
    }

    public function getScheduleByDay($lesson)
    {
        $sub_id = $lesson->sub_id;
        $sub = \App\Subject::subjectBySubjectId($sub_id)->get();
        $schedule['sub_name'] = $sub[0]->sub_name;

        $user_id = $lesson->user_id;
        $user = \App\User::userByUserId($user_id)->get();
        $schedule['teacher_name'] = $user[0]->user_name;

        $room_id = $lesson->room_id;
        $room = \App\Room::roomByRoomId($room_id)->get();
        $schedule['room_number'] = $room[0]->room_number;
        $schedule_date = $lesson->schedule_date;
        $schedule_time_start = substr($schedule_date, -8, -3);
        $schedule['schedule_time_start'] = $schedule_time_start;
        $schedule_time_end1 = substr($schedule_time_start, 0, 2);
        $schedule_time_end2 = substr($schedule_time_start, -2);
        $schedule_time_end2 = $schedule_time_end2 + 50;

        if ($schedule_time_end2 == 60) {
            $schedule_time_end1 = $schedule_time_end1 + 1;
            $schedule_time_end2 = '00';
        } else if ($schedule_time_end2 == 70) {
            $schedule_time_end1 = $schedule_time_end1 + 1;
            $schedule_time_end2 = '10';
        } else if ($schedule_time_end2 == 80) {
            $schedule_time_end1 = $schedule_time_end1 + 1;
            $schedule_time_end2 = '20';
        } else if ($schedule_time_end2 == 90) {
            $schedule_time_end1 = $schedule_time_end1 + 1;
            $schedule_time_end2 = '30';
        }

        $schedule_time_end = $schedule_time_end1 . ':' . $schedule_time_end2;

        $schedule['schedule_time_end'] = $schedule_time_end;
        $schedule['schedule_type'] = $lesson->schedule_type;

        return $schedule;
    }

    public function reserveRoom()
    {
        $scheduleASD = request('schedule');
        $schedule = new \App\Schedule;
        $schedule->sub_id = 7;
        $schedule->room_id = request('room_id');
        $schedule->user_id = Auth::id();
        $user = \App\User::userByUserId(Auth::id())->get();
        $schedule->group_id = $user[0]->group_id;
        $schedule->schedule_type = 'reserve';
        $schedule->schedule_day = $scheduleASD[1];
        $time = substr($scheduleASD[0], -5);
        $schedule_date = '2019-05-24 ' . $time . ':00';
        $schedule->schedule_date = $schedule_date;
        $schedule->save();
        return response()->json('success');
    }

    public function getFreeRoomsSchedulesByRoomDate()
    {
        $date = request('schedule_date');
        $date = substr($date, -5);
        $start = '2019-05-24 ' . $date . ':00';

        $hours = substr($start, 11, 2);
        $hours = $hours + 01;

        $minutes = substr($start, -2);
        $minutes = $minutes + 20;

        $end = '2019-05-24 ' . $hours . ':' . $minutes . ':00';

        $date = request('schedule_date');
        $day = substr($date, 8, 2);
        $schedule_day = 29 - $day;

        $rooms = \App\Schedule::getAllFreeRooms($start, $end, $schedule_day)->orderBy('room_id', 'asc')->get();

        $a = 0;
        foreach ($rooms as $room) {
            $roomsIDs[$a] = $room->room_id;
            $timeASD1 = $room->schedule_date;
            $timeASD2 = $room->schedule_day;
                $a++;
        }
        $allRooms = \App\Room::roomAll()->orderBy('room_number', 'asc')->get();

        $j = 0;
        foreach ($allRooms as $room) {
            $allRoomIds[$j] = $room->room_id;
            $allRoomNumbers[$j] = $room->room_number;
            $j++;
        }

        $b = 0;
        for ($i = 0; $i < $j; $i++) {
            $check = false;
            for ($g = 0; $g < $a; $g++) {
                if ($allRoomIds[$i] == $roomsIDs[$g])  {
                    $check = true;
                }
            }

            if(!$check) {
                $finalA[$b] = $allRoomIds[$i];
                $finalB[$b] = $allRoomNumbers[$i];
                $b++;
            }
        }

        $c = 0;
        for ($i = 0; $i < $b; $i++) {
            $finalAB['room_id'] = $finalA[$i];
            $finalAB['room_number'] = $finalB[$i];


            $final[$c] = $finalAB;
            $c++;
        }

        $qwe[0] = $timeASD1;
        $qwe[1] = $timeASD2;

        $finalFinal['schedule'] = $qwe;
        $finalFinal['free_rooms'] = $final;

        return response()->json($qwe);
    }
}
