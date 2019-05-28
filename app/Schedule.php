<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';

    protected $primaryKey = 'schedule_id';

    protected $fillable = [
        'sub_id',
        'room_id',
        'user_id',
        'group_id',
        'schedule_type',
        'schedule_day',
    ];

    protected $dateFormat = [
        'schedule_date',
    ];

    public $timestamps = false;

    public function subjects()
    {
        return $this->hasMany('App\Subject', 'sub_id');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room', 'room_id');
    }

    public function users()
    {
        return $this->hasOne('App\User', 'user_id');
    }

    public function groups()
    {
        return $this->hasOne('App\Group', 'group_id');
    }

    public function scopeScheduleByGroupId($query, $group_id)
    {
        return $query->where('group_id', $group_id);
    }

    public function scopeScheduleByRoomId($query, $room_id)
    {
        return $query->where('room_id', $room_id);
    }

    public function scopeScheduleByUserId($query, $user_id)
    {
        return $query->where('user_id', $user_id);
    }

    public function scopeDay($query, $schedule_day)
    {
        return $query->where('schedule_day', $schedule_day);
    }

    public function scopeGetAllFreeRooms($query, $start, $end, $schedule_day)
    {
        return $query->where([
            ['schedule_date', '>', $start],
            ['schedule_date', '<', $end],
            ['schedule_day', '=', $schedule_day],
        ]);
    }
}
