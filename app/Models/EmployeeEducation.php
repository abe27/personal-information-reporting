<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeEducation extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'profile_id',
        'education_id',
        'edu_from',
        'edu_from_year',
        'is_status',
    ];
}
