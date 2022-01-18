<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeJobDetail extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'profile_id',
        'employee_date',
        'emp_status',
        'salary',
        'is_status',
    ];
}
