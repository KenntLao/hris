<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hris_candidates extends Model
{
    protected $fillable = [
    	'position_applied',
    	'hiring_stage',
    	'first_name',
    	'last_name',
    	'profile_image',
    	'gender',
    	'city',
    	'country',
    	'telephone',
    	'email',
    	'resume',
    	'resume_headline',
    	'profile_summary',
    	'total_years_exp',
    	'work_history',
    	'education',
    	'skills',
    	'referees',
    	'prefered_industry',
    	'expected_salary'
    ];
}
