<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';

    protected $primaryKey = 'question_id';

    protected $fillable = [
        'question_content',
    ];

    public $timestamps = false;
}
