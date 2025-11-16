<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
            'user_id',
            'name',
            'profile_picture',
            'designation_id',
            'department_id',
           'country_id',
            'mobile',
            'gender',
            'joining_date',
            'birth_date',
            'reporting_to',
            'language_id',
            'address',
            'about',
            'loging_permission',
            'notification_permission',
            'hourly_rate',
            'slack_username',
            'skills',

    ];
}
