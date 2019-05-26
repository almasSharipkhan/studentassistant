<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $table = 'specialities';

    protected $primaryKey = 'spec_id';

    protected $fillable = [
        'spec_name',
        'dep_id',
    ];

    public $timestamps = false;
}