<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $primaryKey = 'group_id';

    protected $attributes = [
        'students_quantity' => 0,
    ];

    protected $fillable = [
        'group_name',
        'group_course',
        'spec_id',
    ];

    public $timestamps = false;
}
