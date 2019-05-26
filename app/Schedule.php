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
    ];

    public $dateFormat = [
        'schedule_data',
    ];
}
