<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    protected $table = 'users';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'user_role',
        'user_name',
        'user_surname',
        'email',
        'user_birthday',
        'password',
    ];

    protected $attributes = [
        'group_id' => 5,
        'user_course' => 4,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public $timestamps = false;

    public function schedules()
    {
        return $this->belongsToOne('App\Schedule');
    }

    public function scopeUserByUserId($query, $user_id)
    {
        return $query->where('id', $user_id);
    }

    public function scopeUserByUserEmail($query, $user_email)
    {
        return $query->where('user_email', $user_email);
    }

    public function scopeUsersByUserRole($query, $role)
    {
        return $query->where('user_role', $role);
    }

    public function scopeStudents($query)
    {
        return $query->usersByUserRole(1);
    }

    public function scopeStudentsByGroupId($query, $group_id)
    {
        return $query->students()->where('group_id', $group_id);
    }

    public function scopeTeachers($query)
    {
        return $query->usersByUserRole(2);
    }

    public function scopeTeacherByUserID($query, $user_id)
    {
        return $query->teachers()->userByUserId($user_id);
    }
}
