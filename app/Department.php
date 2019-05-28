<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    protected $primaryKey = 'dep_id';

    protected $fillable = [
        'dep_name',
        'dep_head_of',
    ];

    protected $attributes = [
        'dep_teachers_quantity' => 0,
    ];

    public $timestamps = false;
}
