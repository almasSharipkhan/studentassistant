<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $primaryKey = 'sub_id';

    protected $fillable = [
        'sub_name',
    ];
}
