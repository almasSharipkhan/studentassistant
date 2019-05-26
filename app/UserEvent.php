<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    protected $table = 'users_events';

    protected $primaryKey = 'users_events_id';

    protected $fillable = [
        'event_id',
        'user_id',
    ];

    public $timestamps = false;

    public function scopeGetByUserId($query, $user_id)
    {
        return $query->where('user_id', $user_id);
    }

    public function scopeGetEventIdAndDate($query, $user_id)
    {
        $user_events = $query->getByUserId($user_id)->get();
        $i = 0;
        foreach($user_events as $user_event)
        {
            $event['event_id'] = $user_event->event_id;
            $event['event_date'] = $user_event->events->event_date;
            $events[$i] = $event;
            $i++;
        }

        return $events;
    }

    public function events()
    {
        return $this->hasOne('App\Event', 'event_id');
    }
}
