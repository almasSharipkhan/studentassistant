<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $primaryKey = 'group_id';

    protected $fillable = [
        'group_name',
        'group_course',
        'spec_id',
    ];

    protected $attributes = [
        'group_students_quantity' => 0,
    ];

    public $timestamps = false;

    public function schedules()
    {
        return $this->belongsToOne('App\Schedule');
    }
}
