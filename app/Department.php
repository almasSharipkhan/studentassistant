<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    protected $primaryKey = 'dep_id';

    protected $attributes = [
        'teachers_quantity' => 0,
    ];

    protected $fillable = [
        'dep_name',
        'head_of_dep',
    ];

    public $timestamps = false;
}
