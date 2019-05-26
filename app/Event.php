<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $primaryKey = 'event_id';

    protected $fillable = [
        'user_id',
        'event_description',
        'event_content',
        'event_date',
    ];

    public $timestamps = true;

    public function userEvents()
    {
        return $this->belongsToOne('App\UserEvent');
    }
}
