<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $primaryKey = 'room_id';

    protected $fillable = [
        'room_number',
    ];

    public function schedules()
    {
        return $this->belongsToMany('App\Schedule');
    }

    public $timestamps = false;

    public function scopeRoomByRoomId($query, $room_id)
    {
        return $query->where('room_id', $room_id);
    }

    public function scopeRoomAll($query)
    {
        return $query->where('room_id', '>', 0);
    }
}
