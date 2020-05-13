<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hris_job_positions extends Model
{
    protected $fillable = [
        'job_code',
        'job_title',
        'company_name',
        'hiring_manager',
        'show_hiring_manager_name',
        'short_description',
        'job_description',
        'requirements',
        'benefits',
        'country',
        'city',
        'postal_code',
        'department',
        'employment_type',
        'exp_level',
        'job_function',
        'education_level',
        'show_salary',
        'currency',
        'salary_min',
        'salary_max',
        'keywords',
        'status',
        'closing_date',
        'image',
        'display_type'
    ];
}
