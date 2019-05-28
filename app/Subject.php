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

    public $timestamps = false;

    public function schedules()
    {
        return $this->belongsToOne('App\schedule');
    }

    public function scopeSubjectBySubjectId($query, $sub_id)
    {
        return $query->where('sub_id', $sub_id);
    }
}
