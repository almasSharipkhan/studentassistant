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

    public function events()
    {
        return $this->hasOne('App\Event', 'event_id');
    }

    public function scopeUserEventsByUserId($query, $user_id)
    {
        return $query->where('user_id', $user_id);
    }
}
